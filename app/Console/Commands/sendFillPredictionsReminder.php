<?php

namespace App\Console\Commands;

use App\Mail\sendPredictionsReminder;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class sendFillPredictionsReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:predictions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Reminder to customers who didn't fill all the predictions for current day";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (true === empty($gameIds = DB::table('games')->whereDate('date', '=', $date = Carbon::today()->toDateString())->pluck('id')->toArray())) {
            $this->info("No games found for {$date}");
        }

        $totalGamesOnDate = count($gameIds);

        $totalRemindersSent = 0;
        foreach(
            DB::table('predictions')
            ->join('users', 'users.id', '=', 'predictions.Userid')
            ->select(
                'users.id',
                'users.name',
                'users.email'
            )->whereIn('gameId', $gameIds)
            ->groupBy('users.id', 'users.name', 'users.email')
            ->havingRaw("COUNT(predictions.id) < {$totalGamesOnDate}")
            ->get() as $userPrediction
        ) {
            Mail::to($userPrediction)->send(new sendPredictionsReminder($userPrediction));
            $totalRemindersSent++;
        }
        $this->info("Prediction reminders sent: {$totalRemindersSent}");
    }

}

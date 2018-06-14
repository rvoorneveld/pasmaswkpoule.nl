<?php

namespace App\Console\Commands;

use App\Mail\TotalUserPointsCalculated;
use App\Predictions;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class calculateUserPointTotal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'points:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate total points for a user';

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
        $date = Carbon::now()->format('Y-m-d');
        $predictions = Predictions::select([
            DB::raw('SUM(points) as total'),
            'users.id',
            'users.name',
            'users.email',
        ])->join('users', 'users.id', '=', 'predictions.userId')
          ->groupBy('predictions.userId', 'users.name', 'users.email', 'users.id')
          ->get();

        foreach ($predictions as $userPoints) {
            DB::table('users_score')->insert([
                'userId' => $id = $userPoints['id'],
                'date' => $date,
                'points' => $total = $userPoints['total'],
            ]);

            $this->info("Awarded a total of {$total} point(s) to user id: {$id}.");

            Mail::to($userPoints)->send(new TotalUserPointsCalculated($userPoints));
        }
    }
}

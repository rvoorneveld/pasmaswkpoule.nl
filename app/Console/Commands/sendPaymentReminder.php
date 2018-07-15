<?php

namespace App\Console\Commands;

use App\Mail\PaymentReminder;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class sendPaymentReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:payment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Sends payment reminder to users who didn't pay";

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
        Mail::to('wkpoule@webathletes.nl')
            ->bcc(User::where('hasPaid', null)->get()->pluck('email') ?? [])
            ->send(new PaymentReminder());
    }

}

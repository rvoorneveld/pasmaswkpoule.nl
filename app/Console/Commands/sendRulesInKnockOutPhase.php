<?php

namespace App\Console\Commands;

use App\Mail\RulesInKnockOutPhase;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class sendRulesInKnockOutPhase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rules:knockout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends rules in knockout phase to all users';

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
            ->bcc(User::all()->pluck('email') ?? [])
            ->send(new RulesInKnockOutPhase());
    }

}

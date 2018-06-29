<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;

class RulesInKnockOutPhase extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Regels betreffende de knock-out fase')->markdown('emails.knock-out-phase');
    }

}

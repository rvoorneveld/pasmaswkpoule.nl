<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendPredictionsReminder extends Mailable
{

    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     * @param $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Vergeet uw voorspellingen niet in te vullen!')->markdown('emails.fill-predictions-reminder');
    }

}

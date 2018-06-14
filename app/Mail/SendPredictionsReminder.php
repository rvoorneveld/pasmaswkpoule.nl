<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPredictionsReminder extends Mailable
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
        return $this->subject('Je hebt nog niet alle voorspellingen ingevuld!')->markdown('emails.fill-predictions-reminder');
    }

}

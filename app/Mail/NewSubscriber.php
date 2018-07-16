<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Subscribe to Anuj';
        $application_user = \Config::get('anuj.application_user.name');
        $application_user_email = \Config::get('anuj.application_user.email');

        $email = $this->email;
        return $this->from([$application_user_email, $application_user])
            ->to($email)
            ->subject($subject)->markdown('emails.new_subscriber');

    }
}

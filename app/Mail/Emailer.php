<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class Emailer extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $beer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($beer, $user)
    {
        $this->user = $user;
        $this->beer = $beer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.test');
    }
}

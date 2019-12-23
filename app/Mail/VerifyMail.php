<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

   public $email;

   public function __construct($email)
   {
        $this->email = $email;
   }

    public function build()
    {
        return $this->view('email.email');
    }
}

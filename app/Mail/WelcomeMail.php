<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $getparent; // Optional: pass data to the view

    public function __construct($getparent)
    {
        $this->getparent = $getparent;
    }

    public function build()
    {
        return $this->subject('Welcome to Our App')
                    ->view('schoolproject.mailsample');
    }
}

<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AutoReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;  // Declare the variable for use in the email view

    public function __construct($name)
    {
        $this->name = $name;  // Assign the value passed from the controller
    }

    public function build()
    {
        return $this->subject('Thank You for Your Message')  // Set the subject of the email
                    ->view('admin.mails.auto_reply');             // Define the email view template
    }
}

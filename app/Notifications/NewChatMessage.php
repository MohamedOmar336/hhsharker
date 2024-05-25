<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewChatMessage extends Notification
{
    use Queueable;

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['database']; // You can add other channels here like 'mail' or 'broadcast'
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->message,
            'link' => '/chat', // You can customize the link to redirect the user
        ];
    }
}

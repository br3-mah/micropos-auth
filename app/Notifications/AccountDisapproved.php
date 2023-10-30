<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountDisapproved extends Notification
{
    use Queueable;
    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct($user)
    {
        $this->user = $user;   
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Account Disapproval Notification')
        ->greeting('Dear '.$this->user->name.',')
        ->line('We hope this message finds you well.')
        ->line('Regrettably, we must inform you that your application to conduct advisory services has been disapproved.')
        ->line('This decision is based on our current evaluation criteria. We appreciate your interest and encourage you to review and consider reapplying in the future.')
        ->line('Thank you for considering our platform and we wish you success in your future endeavors.')
        ->salutation('Sincerely, The EcoAgro Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountApproved extends Notification
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
        
        $userData = json_encode($this->user);
        // $destination = 'https://callcenter.ecoagrozm/login?user=' . urlencode($userData);
        $destination = 'https://callcenter.ecoagrozm';
        return (new MailMessage)
        ->subject('Account Approved Notification')
        ->greeting('Dear '.$this->user->name.',')
        ->line('Your account has been approved. You can now enjoy all the features of our platform.')
        ->action('Visit Your Dashboard', $destination)
        ->line('Thank you for using our service.');
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

<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Events\UserCreated;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        // Mail::to($event->user->email)->send(new WelcomeEmail($event->user));
    }
}

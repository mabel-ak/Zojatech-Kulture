<?php

namespace App\Listeners;

use App\Mail\SignUpMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SignUplistener
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
    public function handle(object $event): void
    {
        //
        Mail::to($event->user->email)->send(new SignUpMail($event->user));
    }
}

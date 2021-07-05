<?php

namespace App\Listeners;

use App\Mail\ContactEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $contact_us = $event->contact;
        Mail::to('aminayem.au@gmail.com')->send(new ContactEmail($contact_us));
    }
}

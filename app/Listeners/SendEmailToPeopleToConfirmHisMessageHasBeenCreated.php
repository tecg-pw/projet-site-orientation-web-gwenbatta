<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Mail\ContactSended;
use Illuminate\Support\Facades\Mail;

class SendEmailToPeopleToConfirmHisMessageHasBeenCreated
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
     * @param  \App\Events\OfferCreated  $event
     * @return void
     */
    public function handle(ContactCreated $event)
    {
        Mail::to($event->contact->email)
            ->queue(new ContactSended($event->contact));
    }
}

<?php

namespace App\Listeners;

use App\Events\OfferCreated;
use Illuminate\Support\Facades\Mail;

class SendEmailToAgencyToConfirmHisOfferHasBeenCreated
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
    public function handle(OfferCreated $event)
    {
        Mail::to($event->offer->email)
            ->queue(new \App\Mail\OfferSended($event->offer));
    }
}

<?php

namespace App\Listeners;

use App\Events\OfferCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendEmailToAdminToNotifyAnOfferHasBeenCreated
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
        $admins = User::where('is_admin',1)->get();
        foreach ($admins as $admin){
            Mail::to($admin->email)
                ->queue(new \App\Mail\OfferSendedAdmin($event->offer));
        }

    }
}

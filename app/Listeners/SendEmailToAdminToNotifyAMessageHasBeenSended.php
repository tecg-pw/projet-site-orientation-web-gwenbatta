<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendEmailToAdminToNotifyAMessageHasBeenSended
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
        $admins = User::where('is_admin',1)->get();
        foreach ($admins as $admin){
            Mail::to($admin->email)
                ->queue(new \App\Mail\ContactSendedAdmin($event->contact));
        }

    }
}

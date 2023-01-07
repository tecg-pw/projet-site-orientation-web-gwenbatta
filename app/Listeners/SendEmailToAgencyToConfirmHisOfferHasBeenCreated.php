<?php

namespace App\Listeners;

use App\Events\SubjectCreated;
use App\Events\OfferCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
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
     * @param  \App\Events\SubjectCreated  $event
     * @return void
     */
    public function handle(OfferCreated $event)
    {
//        $admins = User::where('is_admin',1)->get();
//        foreach ($admins as $admin){
//        Mail::to($admin->email)
//            ->queue(new \App\Mail\SubjectCreated($event->subject));
//        }

        Mail::to($event->offer->email)
            ->send(new \App\Mail\OfferSended($event->offer));
    }
}

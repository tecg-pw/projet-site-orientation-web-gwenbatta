<?php

namespace App\Observers;

use App\Models\Actuality;
use App\Models\OfferTranslation;
use App\Models\User;
use App\Models\ActualityTranslation;
use Illuminate\Support\Facades\Mail;

class OfferCreatedObserver
{
    /**
     * Handle the OfferTranslation "created" event.
     *
     * @param \App\Models\OfferTranslation $subject
     * @return void
     */
    public function created(OfferTranslation $offer)
    {
        $users= User::where('newsletter',true)->get();
            foreach ($users as $user) {
                Mail::to($user->email)
                    ->send(new \App\Mail\OfferCreated($offer));

            }
    }

    /**
     * Handle the OfferTranslation "updated" event.
     *
     * @param \App\Models\OfferTranslation $subject
     * @return void
     */
    public function updated(OfferTranslation $subject)
    {
       //

    }

    /**
     * Handle the OfferTranslation "deleted" event.
     *
     * @param \App\Models\OfferTranslation $subject
     * @return void
     */
    public function deleted(OfferTranslation $subject)
    {
        //
    }

    /**
     * Handle the OfferTranslation "restored" event.
     *
     * @param \App\Models\OfferTranslation $subject
     * @return void
     */
    public function restored(OfferTranslation $subject)
    {
        //
    }

    /**
     * Handle the OfferTranslation "force deleted" event.
     *
     * @param \App\Models\OfferTranslation $subject
     * @return void
     */
    public function forceDeleted(OfferTranslation $subject)
    {
        //
    }
}

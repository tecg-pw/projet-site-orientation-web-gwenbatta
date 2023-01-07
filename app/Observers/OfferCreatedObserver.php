<?php

namespace App\Observers;

use App\Models\Actuality;
use App\Models\OfferTranslation;
use App\Models\Subject;
use App\Models\User;
use App\Models\ActualityTranslation;
use Illuminate\Support\Facades\Mail;

class OfferCreatedObserver
{
    /**
     * Handle the Subject "created" event.
     *
     * @param \App\Models\Subject $subject
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
     * Handle the Subject "updated" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function updated(Subject $subject)
    {
       //

    }

    /**
     * Handle the Subject "deleted" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function deleted(Subject $subject)
    {
        //
    }

    /**
     * Handle the Subject "restored" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function restored(Subject $subject)
    {
        //
    }

    /**
     * Handle the Subject "force deleted" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function forceDeleted(Subject $subject)
    {
        //
    }
}

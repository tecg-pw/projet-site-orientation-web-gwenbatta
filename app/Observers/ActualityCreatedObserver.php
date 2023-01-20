<?php

namespace App\Observers;

use App\Models\Actuality;
use App\Models\User;
use App\Models\ActualityTranslation;
use Illuminate\Support\Facades\Mail;

class ActualityCreatedObserver
{
    /**
     * Handle the ActualityTranslation "created" event.
     *
     * @param \App\Models\ActualityTranslation $subject
     * @return void
     */
    public function created(ActualityTranslation $actuality)
    {
        $users= User::where('newsletter',true)->get();
            foreach ($users as $user) {
                Mail::to($user->email)
                    ->queue(new \App\Mail\ActualityCreated($actuality));

            }
    }

    /**
     * Handle the Subject "updated" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function updated(ActualityTranslation $subject)
    {
       //

    }

    /**
     * Handle the ActualityTranslation "deleted" event.
     *
     * @param \App\Models\ActualityTranslation $subject
     * @return void
     */
    public function deleted(ActualityTranslation $subject)
    {
        //
    }

    /**
     * Handle the ActualityTranslation "restored" event.
     *
     * @param \App\Models\ActualityTranslation $subject
     * @return void
     */
    public function restored(ActualityTranslation $subject)
    {
        //
    }

    /**
     * Handle the ActualityTranslation "force deleted" event.
     *
     * @param \App\Models\ActualityTranslation $subject
     * @return void
     */
    public function forceDeleted(ActualityTranslation $subject)
    {
        //
    }
}

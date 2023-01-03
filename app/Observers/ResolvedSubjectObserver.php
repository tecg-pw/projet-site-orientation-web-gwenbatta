<?php

namespace App\Observers;

use App\Models\Subject;
use Illuminate\Support\Facades\Notification;

class ResolvedSubjectObserver
{
    /**
     * Handle the Subject "created" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function created(Subject $subject)
    {
        //
    }

    /**
     * Handle the Subject "updated" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function updated(Subject $subject)
    {
        if ($subject->resolved) {
            Notification::send($subject->user, new \App\Notifications\ResolvedSubject($subject));
        }

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

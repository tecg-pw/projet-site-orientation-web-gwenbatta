<?php

namespace App\Observers;


use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SubjectCreatedObserver
{
    /**
     * Handle the Subject "created" event.
     *
     * @param \App\Models\Subject $subject
     * @return void
     */
    public function created(Subject $subject)
    {
        $users= User::where('newsletter',true)->get();

        foreach ($users as $user){
            Mail::to($user->email)
                ->queue(new \App\Mail\SubjectCreated($subject));

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

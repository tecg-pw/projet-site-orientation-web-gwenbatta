<?php

namespace App\Observers;

use App\Models\Actuality;
use App\Models\ProjetTranslation;
use App\Models\User;
use App\Models\ActualityTranslation;
use Illuminate\Support\Facades\Mail;

class ProjectCreatedObserver
{
    /**
     * Handle the ProjetTranslation "created" event.
     *
     * @param \App\Models\ProjetTranslation $subject
     * @return void
     */
    public function created(ProjetTranslation $project)
    {
        $users= User::where('newsletter',true)->get();
            foreach ($users as $user) {
                Mail::to($user->email)
                    ->queue(new \App\Mail\ProjectCreated($project));

            }
    }

    /**
     * Handle the ProjetTranslation "updated" event.
     *
     * @param \App\Models\ProjetTranslation $subject
     * @return void
     */
    public function updated(ProjetTranslation $subject)
    {
       //

    }

    /**
     * Handle the ProjetTranslation "deleted" event.
     *
     * @param \App\Models\ProjetTranslation $subject
     * @return void
     */
    public function deleted(ProjetTranslation $subject)
    {
        //
    }

    /**
     * Handle the ProjetTranslation "restored" event.
     *
     * @param \App\Models\ProjetTranslation $subject
     * @return void
     */
    public function restored(ProjetTranslation $subject)
    {
        //
    }

    /**
     * Handle the ProjetTranslation "force deleted" event.
     *
     * @param \App\Models\ProjetTranslation $subject
     * @return void
     */
    public function forceDeleted(ProjetTranslation $subject)
    {
        //
    }
}

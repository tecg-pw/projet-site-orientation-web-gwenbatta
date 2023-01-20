<?php

namespace App\Listeners;

use App\Events\OfferCreated;
use App\Events\SubjectCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailToAdminWarningHimSubjectInForumHasBeenCreated
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
    public function handle(SubjectCreated $event)
    {
        $admins = User::where('is_admin',1)->get();
        foreach ($admins as $admin){
        Mail::to($admin->email)
            ->queue(new \App\Mail\SubjectCreated($event->subject));
        }

    }
}

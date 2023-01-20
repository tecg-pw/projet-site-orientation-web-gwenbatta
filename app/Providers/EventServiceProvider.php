<?php

namespace App\Providers;

use App\Events\ContactCreated;
use App\Events\OfferCreated;
use App\Listeners\SendEmailToAdminToNotifyAMessageHasBeenSended;
use App\Listeners\SendEmailToAdminToNotifyAnOfferHasBeenCreated;
use App\Listeners\SendEmailToAgencyToConfirmHisOfferHasBeenCreated;
use App\Listeners\SendEmailToPeopleToConfirmHisMessageHasBeenCreated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\SubjectCreated;
use App\Listeners\SendEmailToAdminWarningHimSubjectInForumHasBeenCreated;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
//        SubjectCreated::class => [
//            SendEmailToAdminWarningHimSubjectInForumHasBeenCreated::class
//        ],
        OfferCreated::class => [
            SendEmailToAgencyToConfirmHisOfferHasBeenCreated::class,
            SendEmailToAdminToNotifyAnOfferHasBeenCreated::class
        ],
        ContactCreated::class => [
            SendEmailToPeopleToConfirmHisMessageHasBeenCreated::class,
            SendEmailToAdminToNotifyAMessageHasBeenSended::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
//        Subject::observe(ResolvedSubjectObserver::class);
//        Subject::observe(SubjectCreatedObserver::class);
//        ActualityTranslation::observe(ActualityCreatedObserver::class);
//        ProjetTranslation::observe(ProjectCreatedObserver::class);
//        OfferTranslation::observe(OfferCreatedObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}

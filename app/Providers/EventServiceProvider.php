<?php

namespace App\Providers;

use App\Events\OfferCreated;
use App\Listeners\SendEmailToAdminToNotifyAnOfferHasBeenCreated;
use App\Listeners\SendEmailToAgencyToConfirmHisOfferHasBeenCreated;
use App\Models\Actuality;
use App\Models\Offer;
use App\Models\OfferTranslation;
use App\Models\Project;
use App\Models\ProjetTranslation;
use App\Models\Subject;
use App\Models\ActualityTranslation;
use App\Observers\ActualityCreatedObserver;
use App\Observers\OfferCreatedObserver;
use App\Observers\ProjectCreatedObserver;
use App\Observers\SubjectCreatedObserver;
use App\Observers\ResolvedSubjectObserver;
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
        SubjectCreated::class => [
            SendEmailToAdminWarningHimSubjectInForumHasBeenCreated::class
        ],
        OfferCreated::class => [
            SendEmailToAgencyToConfirmHisOfferHasBeenCreated::class,
            SendEmailToAdminToNotifyAnOfferHasBeenCreated::class
        ],
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

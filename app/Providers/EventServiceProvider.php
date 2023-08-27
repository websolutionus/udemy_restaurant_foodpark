<?php

namespace App\Providers;

use App\Events\OrderPaymentUpdateEvent;
use App\Events\OrderPlacedNotificationEvent;
use App\Events\RTOrderPlacedNotificationEvent;
use App\Listeners\OrderPaymentUpdateListener;
use App\Listeners\OrderPlacedNotificationListener;
use App\Listeners\RTOrderPlacedNotificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

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
        OrderPaymentUpdateEvent::class => [
            OrderPaymentUpdateListener::class,
        ],
        OrderPlacedNotificationEvent::class => [
            OrderPlacedNotificationListener::class,
        ],
        RTOrderPlacedNotificationEvent::class => [
            RTOrderPlacedNotificationListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

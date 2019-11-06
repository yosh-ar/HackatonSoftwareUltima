<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
=======
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
>>>>>>> origin/Arturo

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\Events\Event' => [
            'App\Listeners\EventListener',
=======
        Registered::class => [
            SendEmailVerificationNotification::class,
>>>>>>> origin/Arturo
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

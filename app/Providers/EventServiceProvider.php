<?php

namespace App\Providers;

use App\Events\LastReloadEvent;
use App\Listeners\LastReloadListener;
use App\Listeners\LoginListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

         Login::class => [
            LoginListener::class,

        ],
        LastReloadEvent::class =>[
            LastReloadListener::class,
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class =>[
            'SocialiteProviders\\VKontakte\\VKontakteExtendSocialite@handle'],

            ['SocialiteProviders\\Facebook\\FacebookExtendSocialite@handle'
            
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

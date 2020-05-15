<?php

namespace App\Providers;

use App\Events\NewRegisterEvent;
use App\Listeners\NewsLetterMail;
use App\Listeners\SendWorkEmailListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Bus\Dispatcher;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

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
       'App\Events\TestMail'=>[
            'App\Listeners\TestEmailListener'
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
       
        // Event::listen('App\Event\NewsLetterMail','App\Listener\SendWorkEmailListener');
        
    }
}

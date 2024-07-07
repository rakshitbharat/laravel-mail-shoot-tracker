<?php

namespace RakshitBharat\MailShootTracker;

use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\Events\MessageSent;
use RakshitBharat\MailShootTracker\Listeners\LogMailListener;

class MailShootTrackerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['events']->listen(MessageSent::class, LogMailListener::class);
    }
}

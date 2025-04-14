<?php

namespace Najmul\BkashPayment;

use Illuminate\Support\ServiceProvider;

class BkashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views from package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bkash');

        // Publish views to app
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bkash'),
        ], 'views'); // changed tag to 'views'
    }

    public function register()
    {
        //
    }
}

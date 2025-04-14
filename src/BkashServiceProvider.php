<?php

namespace Najmul\BkashPayment;

use Illuminate\Support\ServiceProvider;

class BkashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bkash');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/bkash'),
        ], 'bkash-views');
    }

    public function register()
    {
        //
    }
}

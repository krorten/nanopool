<?php

namespace Krorten\Nanopool\Providers;

use Illuminate\Support\ServiceProvider;
use Nanopool\Nanopool;

class NanopoolProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Nanopool', function () {
            return new Nanopool();
        });
    }
}

<?php

namespace App\Providers;

use App\Services\RapidApiService;
use Illuminate\Support\ServiceProvider;

class RapidApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            RapidApiService::class,
            fn() => new RapidApiService(config('app.rapid_api_key'))
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

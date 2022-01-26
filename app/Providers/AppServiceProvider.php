<?php

namespace App\Providers;

use App\Services\SMS\SMSGlobalMessager;
use App\Services\SMS\Messager;
use App\Services\SMS\VoodooMessager;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Messager::class, SMSGlobalMessager::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        to not get this error after php artisan migrate---
        Syntax error or access violation: 1071 Specified key was too long; max key  
        length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
        */ 
        Schema::defaultStringLength(191);
        //URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}

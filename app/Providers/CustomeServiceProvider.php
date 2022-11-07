<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('home',function(){
            return new \App\Repositories\home;
        });
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

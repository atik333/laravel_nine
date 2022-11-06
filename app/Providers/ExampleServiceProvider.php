<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
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
        $atik = array();
        $atik['w']='Web Design';
        $atik['g']='Graphics Design';
        view()->share('category',$atik);
    }
}

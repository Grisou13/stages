<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LibServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        parent::boot();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('intranet',function(){
            return new \App\Lib\Intranet\Intranet;
        });
        $this->app->bind('intranet.auth',function(){
            return new \App\Lib\Intranet\Auth;
        });
    }
}

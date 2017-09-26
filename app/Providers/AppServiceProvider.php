<?php

namespace crossover\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Restricting access to dusk
        if ($this->app->environment('local','testing')) 
        {
            $this->app->register(DuskServiceProvider::class);
        }
    }
        
    
}

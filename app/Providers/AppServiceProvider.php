<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        // \URL::forceScheme('https');
        // $this->app['request']->server->set('HTTPS','on');
=======
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
>>>>>>> 1725579bd9bb8ad34669f5ebffee49736599242c
        
    }
}

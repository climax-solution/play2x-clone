<?php

namespace App\Providers;

use App\Settings;
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
$this->app['request']->server->set('HTTP', true);
        //8
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
	\URL::forceScheme('http');
        view()->share('settings', Settings::where('id', 1)->first());
    }

}

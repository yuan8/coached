<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\UrlGenerator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        //
        Schema::defaultStringLength(191);
        Validator::extend('no_space', 'App\Rules\NoSpace@passes');
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}

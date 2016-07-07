<?php

namespace App\Providers;

use MonkeyLearn\Client as MonkeyLearn;
use Illuminate\Support\ServiceProvider;

class MonkeyLearnServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('monkeylearn',function($app){
            return new MonkeyLearn(env('MONKEY_LEARN_SECRET'));
        });
    }
}

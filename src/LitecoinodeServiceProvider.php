<?php

namespace Adelphia\Litecoinode;

use Illuminate\Support\ServiceProvider;
use Adelphia\Litecoinode\LitecoinCall;

class LitecoinodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('LitecoinCall', function(){
            return new LitecoinCall;
        });
    }
}

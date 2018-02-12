<?php

namespace Adelphia\Litecoinode;

use Illuminate\Support\ServiceProvider;
use Adelphia\Bitcoinode\Litecoinode;

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
        $this->app->bind('Litecoinode', function(){
            return new Litecoinode;
        });
    }
}

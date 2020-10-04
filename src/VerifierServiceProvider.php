<?php

namespace Phibbiyan\Company;

use Illuminate\Support\ServiceProvider;

class VerifierServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Phibbiyan\Verifier\Verifier');
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

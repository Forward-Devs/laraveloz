<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->app['auth']->extend(
        'legacy',
        function () {
            return new \Illuminate\Auth\Guard(
                new \App\Services\Auth\UserProvider(
                    $this->app['config']['auth.model']
                ),
                $this->app['session.store']
            );
        }
    );
        //
    }
}

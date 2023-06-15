<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    Gate::define('admin', function ($user) {
        return $user->auth_level === 'admin';
    });

    Gate::define('manager', function ($user) {
        return $user->auth_level === 'manager';
    });
    Gate::define('fleet_manager', function ($user) {
        return $user->auth_level === 'fleet_manager';
    });

    Gate::define('employee', function ($user) {
        return $user->auth_level === 'employee';
    });
    }
}

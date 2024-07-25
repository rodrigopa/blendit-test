<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('manage-students', function (User $user) {
            return in_array((int) $user->role, [1, 2, 3]);
        });
        
        Gate::define('manage-classes', function (User $user) {
            return in_array((int) $user->role, [1, 2]);
        });
        
        Gate::define('manage-reports', function (User $user) {
            return in_array((int) $user->role, [1, 2]);
        });
        
        Gate::define('manage-enrolls', function (User $user) {
            return ((int) $user->role) === 1;
        });
    }
}

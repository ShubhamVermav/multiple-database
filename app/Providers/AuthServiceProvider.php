<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    
    protected $policies = [
        \App\Models\MainUser::class => \App\Policies\MainUserPolicy::class,
    ];


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    
    // Specific role checks
    Gate::define('is-admin', function ($user) {
        return optional($user->role)->role_type === 'admin';
    });

    Gate::define('is-subadmin', function ($user) {
        return optional($user->role)->role_type === 'subadmin';
    });

    // Generalized role check
    Gate::define('has-role', function ($user, $roleType) {
        return optional($user->role)->role_type === $roleType;
    });

    // Allow both admin and subadmin
    Gate::define('is-admin-or-subadmin', function ($user) {
        $role = optional($user->role)->role_type;
        return in_array($role, ['admin', 'subadmin']);
    });

    }
}

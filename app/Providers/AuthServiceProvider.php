<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Enums\UserRole;
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
        $roles = UserRole::values();

        foreach ($roles as $role) {
            Gate::define(ucfirst($role), function ($user) use ($role) {
                return $user->role->value == $role;
            });
        }
    }
}

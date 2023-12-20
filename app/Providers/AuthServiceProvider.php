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
        Gate::define('isSuperAdmin', function ($user) {
            return $user->role == UserRole::SUPERADMIN->value;
        });

        Gate::define('isAdmin', function ($user) {
            return $user->role == UserRole::ADMIN->value;
        });

        Gate::define('isEditor', function ($user) {
            return $user->role == UserRole::EDITOR->value;
        });

        Gate::define('isUser', function ($user) {
            return $user->role == UserRole::USER->value;
        });

        Gate::define('isSubscriber', function ($user) {
            return $user->role == UserRole::SUBSCRIBER->value;
        });

    }
}

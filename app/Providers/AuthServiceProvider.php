<?php

namespace App\Providers;

use App\Models\Role;
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
        if (!$this->app->runningInConsole() && Role::count() > 0) {
            $this->defineRoleGates();
        }
    }

    /**
     * Define gates based on roles from the Role model.
     */
    private function defineRoleGates(): void
    {
        $roles = Role::pluck('name')->toArray();

        foreach ($roles as $role) {
            Gate::define(ucfirst($role), function ($user) use ($role) {
                return $user->roles->contains('name', $role);
            });
        }
    }
}

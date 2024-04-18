<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $admins = User::with('roles')
            ->whereHas('roles', function ($query)
            {
                $query->whereIn('name', ['superadmin', 'admin']);
            })
            ->get();

        foreach ($admins as $admin) {
            Notification::send($admin, new NewUserNotification($user));
        }

        $userRole = Role::query()->where('name', 'user');

        if ($userRole->exists()) {
            $user->assignRole($userRole->first());
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}

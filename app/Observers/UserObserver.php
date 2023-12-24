<?php

namespace App\Observers;

use App\Enums\UserRole;
use App\Models\Role;
use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        Notification::send($user, new NewUserNotification($user));

        if (!$user->roles()->exists()) {
            $defaultRole = Role::where('name', UserRole::CUSTOMER->value)->first();
            if ($defaultRole) {
                $user->roles()->attach($defaultRole);
            }
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

<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\MediaFactory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)
            ->hasAttached(
                MediaFactory::new()->count(5)
            )
            ->afterCreating(function (User $user)
            {
                $featuredMedia                     = $user->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->create()->each(function ($user)
            {
                $user->assignRole('user');
            });
    }
}

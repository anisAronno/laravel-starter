<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)
        ->has(ImageFactory::new()->count(5), 'images')
        ->afterCreating(function ($blog)
        {
            $blog->images->first()->pivot->is_featured = 1;
            $blog->images->first()->pivot->save();
        })
        ->create()->each(function ($user)
        {
            $user->assignRole('user');
        });
    }
}

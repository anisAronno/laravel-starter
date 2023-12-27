<?php

namespace Database\Seeders;

use AnisAronno\MediaHelper\Facades\Media;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        User::factory(20)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}

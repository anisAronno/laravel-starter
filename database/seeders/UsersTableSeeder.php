<?php

namespace Database\Seeders;

use AnisAronno\MediaHelper\Facades\Media;
use App\Enums\UserRole;
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
        User::truncate();
        User::create([
            "name" => "Anichur Rahaman",
            "email" => "admin@gmail.com",
            "password" => 'password',
            'phone' => '01816366535',
            'image' => Media::getDefaultAvatar(),
            'role' => UserRole::SUPERADMIN->value,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use AnisAronno\MediaHelper\Facades\Media;
use App\Enums\UserRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->truncateTables();
        $superAdmin = $this->createSuperAdmin();
        $this->createRoles();
        $this->attachSuperAdminRole($superAdmin);
        $this->createAdditionalUsers();
    }

    private function truncateTables(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Role::truncate();
        Schema::enableForeignKeyConstraints();
    }

    private function createSuperAdmin(): User
    {
        return User::create([
            "name" => "Anichur Rahaman",
            "email" => "admin@gmail.com",
            "password" => 'password',
            'phone' => '01816366535',
            'image' => Media::getDefaultAvatar(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }

    private function createRoles(): void
    {
        $roles = UserRole::values();
        $rolesData = [];

        foreach ($roles as $role) {
            $rolesData[] = [
                'name' => $role,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }    

        Role::query()->insert($rolesData);
    }

    private function attachSuperAdminRole(User $user): void
    {
        $superAdminRole = Role::where('name', UserRole::SUPERADMIN->value)->first();
        if ($superAdminRole) {
            $user->roles()->attach($superAdminRole->id);
        }
    }

    private function createAdditionalUsers(): void
    {
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($user) {
                $randomRoles = Role::inRandomOrder()->limit(rand(1, 3))->get();
                $user->roles()->attach($randomRoles);
            });
    }
}

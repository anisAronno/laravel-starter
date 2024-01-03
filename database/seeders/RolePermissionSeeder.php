<?php

namespace Database\Seeders;

use App\Enums\UserGender;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTables();

        $this->createSuperAdminUser();

        $this->createRolesAndPermissions();

        $this->assignPermissionsToRoles();

        $this->assignRolesToSuperAdmin();
    }

    private function truncateTables()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Role::truncate();
        Permission::truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('role_has_permissions')->truncate();
        Schema::enableForeignKeyConstraints();
    }

    private function createSuperAdminUser()
    {
        User::create([
            'name'              => 'Anichur Rahaman',
            'email'             => 'admin@gmail.com',
            'phone'             => '+8801816366535',
            'password'          => bcrypt('password'),
            'status'            => UserStatus::ACTIVE,
            'email_verified_at' => Date::now(),
            'gender'            => UserGender::MALE,
            'remember_token'    => Str::random(10),
            'isDeletable'       => 0,
        ]);
    }

    private function createRolesAndPermissions()
    {
        $permissions = [
            [
                'group_name'  => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                ],
            ],

            [
                'group_name'  => 'user',
                'permissions' => [

                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                    'user.status',
                ],
            ],
            [
                'group_name'  => 'role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.status',
                ],
            ],

            [
                'group_name'  => 'media',
                'permissions' => [
                    'media.create',
                    'media.view',
                    'media.edit',
                    'media.delete',
                    'media.status',
                ],
            ],

            [
                'group_name'  => 'email',
                'permissions' => [
                    'email.create',
                    'email.view',
                    'email.edit',
                    'email.delete',
                    'email.status',
                ],
            ],

            [
                'group_name'  => 'chat',
                'permissions' => [
                    'chat.create',
                    'chat.view',
                    'chat.edit',
                    'chat.delete',
                    'chat.status',
                ],
            ],

            [
                'group_name'  => 'calendar',
                'permissions' => [
                    'calendar.create',
                    'calendar.view',
                    'calendar.edit',
                    'calendar.delete',
                    'calendar.status',
                ],
            ],

            [
                'group_name'  => 'category',
                'permissions' => [

                    'category.create',
                    'category.view',
                    'category.edit',
                    'category.delete',
                    'category.status',
                ],
            ],

            [
                'group_name'  => 'tag',
                'permissions' => [

                    'tag.create',
                    'tag.view',
                    'tag.edit',
                    'tag.delete',
                    'tag.status',
                ],
            ],

            [
                'group_name'  => 'blog',
                'permissions' => [
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.status',
                ],
            ],

            [
                'group_name'  => 'ecommerce',
                'permissions' => [
                    'ecommerce.view',
                ],
            ],

            [
                'group_name'  => 'product',
                'permissions' => [
                    'product.create',
                    'product.view',
                    'product.edit',
                    'product.delete',
                    'product.status',
                    'product.report',
                ],
            ],

            [
                'group_name'  => 'order',
                'permissions' => [
                    'order.create',
                    'order.view',
                    'order.edit',
                    'order.delete',
                    'order.status',
                    'order.report',
                ],
            ],

            [
                'group_name'  => 'invoice',
                'permissions' => [
                    'invoice.create',
                    'invoice.view',
                    'invoice.edit',
                    'invoice.delete',
                    'invoice.status',
                ],
            ],

            [
                'group_name'  => 'coupon',
                'permissions' => [
                    'coupon.create',
                    'coupon.view',
                    'coupon.edit',
                    'coupon.delete',
                    'coupon.status',
                ],
            ],
            [
                'group_name'  => 'customer',
                'permissions' => [
                    'customer.create',
                    'customer.view',
                    'customer.edit',
                    'customer.delete',
                    'customer.status',
                    'customer.report',
                ],
            ],

            [
                'group_name'  => 'about',
                'permissions' => [

                    'about.create',
                    'about.view',
                    'about.edit',
                    'about.delete',
                    'about.status',
                ],
            ],
            [
                'group_name'  => 'contact',
                'permissions' => [

                    'contact.create',
                    'contact.view',
                    'contact.edit',
                    'contact.delete',
                    'contact.status',
                ],
            ],
            [
                'group_name'  => 'slider',
                'permissions' => [
                    'slider.create',
                    'slider.view',
                    'slider.edit',
                    'slider.delete',
                    'slider.status',
                ],
            ],

            [
                'group_name'  => 'settings',
                'permissions' => [
                    'settings.create',
                    'settings.view',
                    'settings.edit',
                    'settings.delete',
                    'settings.status',
                ],
            ],
            [
                'group_name'  => 'pages',
                'permissions' => [

                    'pages.create',
                    'pages.view',
                    'pages.edit',
                    'pages.delete',
                    'pages.status',
                ],
            ],

            [
                'group_name'  => 'social',
                'permissions' => [

                    'social.create',
                    'social.view',
                    'social.edit',
                    'social.delete',
                    'social.status',
                ],
            ],

            [
                'group_name'  => 'notification',
                'permissions' => [
                    'notification.create',
                    'notification.view',
                    'notification.edit',
                    'notification.delete',
                    'notification.status',
                ],
            ],
        ];

        foreach ($permissions as $group) {
            $groupName        = $group['group_name'];
            $groupPermissions = $group['permissions'];

            foreach ($groupPermissions as $permissionName) {
                Permission::create(['name' => $permissionName, 'group_name' => $groupName]);
            }
        }

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'author']);
    }

    private function assignPermissionsToRoles()
    {
        // Define permissions for each role
        $permissions = [
            'superadmin' => [
                'dashboard.view',
                'ecommerce.view',

                'user.create',
                'user.view',
                'user.edit',
                'user.delete',
                'user.status',

                'role.create',
                'role.view',
                'role.edit',
                'role.delete',
                'role.status',

                'media.create',
                'media.view',
                'media.edit',
                'media.delete',
                'media.status',

                'email.create',
                'email.view',
                'email.edit',
                'email.delete',
                'email.status',

                'chat.create',
                'chat.view',
                'chat.edit',
                'chat.delete',
                'chat.status',

                'calendar.create',
                'calendar.view',
                'calendar.edit',
                'calendar.delete',
                'calendar.status',

                'invoice.create',
                'invoice.view',
                'invoice.edit',
                'invoice.delete',
                'invoice.status',

                'category.create',
                'category.view',
                'category.edit',
                'category.delete',
                'category.status',

                'tag.create',
                'tag.view',
                'tag.edit',
                'tag.delete',
                'tag.status',

                'about.create',
                'about.view',
                'about.edit',
                'about.delete',
                'about.status',

                'contact.create',
                'contact.view',
                'contact.edit',
                'contact.delete',
                'contact.status',

                'settings.create',
                'settings.view',
                'settings.edit',
                'settings.delete',
                'settings.status',

                'pages.create',
                'pages.view',
                'pages.edit',
                'pages.delete',
                'pages.status',

                'social.create',
                'social.view',
                'social.edit',
                'social.delete',
                'social.status',

                'notification.create',
                'notification.view',
                'notification.edit',
                'notification.delete',
                'notification.status',

                'blog.create',
                'blog.view',
                'blog.edit',
                'blog.delete',
                'blog.status',

                'product.create',
                'product.view',
                'product.edit',
                'product.delete',
                'product.status',
                'product.report',

                'order.create',
                'order.view',
                'order.edit',
                'order.delete',
                'order.status',
                'order.report',

                'coupon.create',
                'coupon.view',
                'coupon.edit',
                'coupon.delete',
                'coupon.status',

                'customer.create',
                'customer.view',
                'customer.edit',
                'customer.delete',
                'customer.status',
                'customer.report',
            ],

            'admin' => [
                'dashboard.view',
                'ecommerce.view',

                'media.create',
                'media.view',
                'media.edit',
                'media.delete',
                'media.status',

                'blog.create',
                'blog.view',
                'blog.edit',
                'blog.delete',
                'blog.status',

                'category.create',
                'category.view',
                'category.edit',
                'category.delete',
                'category.status',

                'about.create',
                'about.view',
                'about.edit',
                'about.delete',
                'about.status',

                'invoice.create',
                'invoice.view',
                'invoice.edit',
                'invoice.delete',
                'invoice.status',

                'contact.create',
                'contact.view',
                'contact.edit',
                'contact.delete',
                'contact.status',

                'slider.create',
                'slider.view',
                'slider.edit',
                'slider.delete',
                'slider.status',

                'settings.create',
                'settings.view',
                'settings.edit',
                'settings.delete',
                'settings.status',

                'pages.create',
                'pages.view',
                'pages.edit',
                'pages.delete',
                'pages.status',

                'social.create',
                'social.view',
                'social.edit',
                'social.delete',
                'social.status',

                'tag.create',
                'tag.view',
                'tag.edit',
                'tag.delete',
                'tag.status',

                'user.create',
                'user.view',
                'user.edit',
                'user.status',

                'product.create',
                'product.view',
                'product.edit',
                'product.delete',
                'product.status',
                'product.report',

                'order.create',
                'order.view',
                'order.edit',
                'order.delete',
                'order.status',
                'order.report',

                'coupon.create',
                'coupon.view',
                'coupon.edit',
                'coupon.delete',
                'coupon.status',

                'customer.create',
                'customer.view',
                'customer.edit',
                'customer.delete',
                'customer.status',
                'customer.report',
            ],

            'editor' => [
                'dashboard.view',

                'media.create',
                'media.view',
                'media.edit',
                'media.delete',
                'media.status',

                'blog.create',
                'blog.view',
                'blog.edit',
                'blog.status',

                'category.create',
                'category.view',
                'category.edit',
                'category.status',

                'tag.create',
                'tag.view',
                'tag.edit',
                'tag.delete',
                'tag.status',

                'about.create',
                'about.view',
                'about.edit',
                'about.status',

                'contact.create',
                'contact.view',
                'contact.edit',
                'contact.status',

                'slider.create',
                'slider.view',
                'slider.edit',
                'slider.delete',
                'slider.status',

                'settings.create',
                'settings.view',
                'settings.edit',
                'settings.status',

                'pages.create',
                'pages.view',
                'pages.edit',
                'pages.status',

                'user.view',
                'user.status',

                'product.create',
                'product.view',
                'product.edit',
                'product.delete',
                'product.status',

                'order.view',
                'order.edit',
                'order.status',
            ],

            'user' => [
                'dashboard.view',

                'blog.create',
                'blog.view',
                'blog.edit',
                'blog.delete',
                'blog.status',

                'category.create',
                'category.view',

                'tag.create',
                'tag.view',

                'product.view',

                'order.view',
                'order.edit',
            ],

            'author' => [
                'dashboard.view',

                'blog.create',
                'blog.view',
                'blog.edit',
                'blog.delete',
                'blog.status',

                'category.create',
                'category.view',

                'tag.create',
                'tag.view',

                'product.view',
            ],
        ];

        foreach ($permissions as $roleName => $rolePermissions) {
            $role = Role::findByName($roleName);
            $role->syncPermissions($rolePermissions);
        }
    }

    private function assignRolesToSuperAdmin()
    {
        $superAdmin = User::where('email', 'admin@gmail.com')->first();

        if ($superAdmin) {
            $roles = ['superadmin', 'admin', 'editor', 'user', 'author'];
            $superAdmin->syncRoles($roles);
        }
    }
}

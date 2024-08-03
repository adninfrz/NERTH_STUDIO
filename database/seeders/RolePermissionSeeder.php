<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage customers',
            'manage carts',
            'manage cart items',
            'manage orders',
            'manage order items',
            'manage products',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                [
                    'name'=> $permission
                ]
            );
        }

        $superAdminRole = Role::firstOrCreate([
            'name'=> 'super_admin'
        ]);

        // Create users
        $users = [
            [
                'name' => 'Fajri',
                'email' => 'fajri.hafizh99@gmail.com',
                'password' => bcrypt('191002'),
            ],
            [
                'name' => 'Adnin',
                'email' => 'adninfarizi12@gmail.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Fabian',
                'email' => 'ahmadfabiansyah@gmail.com',
                'password' => bcrypt('admin123'),
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create($userData);
            $user->assignRole($superAdminRole);
        }
    }
}

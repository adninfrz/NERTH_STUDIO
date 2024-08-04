<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles with the appropriate guard name
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $customerRole = Role::create([
            'name' => 'customer',
            'guard_name' => 'customer',
        ]);

        $users = [
            [
                'name' => 'Fajri',
                'email' => 'fajri.hafizh99@gmail.com',
                'password' => bcrypt('191002'),
                'role' => $adminRole,
            ],
            [
                'name' => 'Adnin',
                'email' => 'adninfarizi12@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => $adminRole,
            ],
            [
                'name' => 'Fabian',
                'email' => 'ahmadfabiansyah@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => $adminRole,
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);

            $user->assignRole($userData['role']);
        }
    }
}


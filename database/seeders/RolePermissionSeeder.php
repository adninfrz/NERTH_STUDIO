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

        $user = User::create([
            'name'=> 'Fajri',
            'email' => 'fajri.hafizh99@gmail.com',
            'password'=> bcrypt('191002'),
        ]);

        $user->assignRole($superAdminRole);
    }
}

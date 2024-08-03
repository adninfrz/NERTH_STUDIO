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
        //
        $permissions = [
            'manage customers',
            'manage orders',
            'manage products',
        ];
        foreach($permissions as $permission){
            Permission::firstOrCreate(
                [
                    'name' => $permission
                ]
                );
        }


        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'Fajri',
            'email' => 'fajri.hafizh@gmail.com',
            'password' => bcrypt ('191002')
        ]);

        $user->assignRole($superAdminRole);

        // Create Customer role
        $customerRole = Role::firstOrCreate(['name' => 'customer']);

        // Optionally assign permissions to the customer role
        // $customerPermissions = ['view products'];
        // foreach ($customerPermissions as $permissionName) {
        //     $permission = Permission::where('name', $permissionName)->first();
        //     if ($permission) {
        //         $customerRole->givePermissionTo($permission);
        //     }
        // }

        // Optionally create a customer user and assign the Customer role
        // $customerUser = User::create([
        //     'name' => 'Customer User',
        //     'email' => 'customer@example.com',
        //     'password' => bcrypt('customerpassword')
        // ]);

        // $customerUser->assignRole($customerRole);
    }
}

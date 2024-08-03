<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers; // Ensure this is the correct path to your Customer model
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example data
        $customers = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('john123'), // Ensure to hash the password
                'birthdate' => '1980-01-01',
            ],
            [
                'first_name' => 'Zachran',
                'last_name' => 'Razendra',
                'email' => 'razendrazachran@gmail.com',
                'password' => Hash::make('zach123'), // Ensure to hash the password
                'birthdate' => '2001-10-15',
            ],
        ];

        // Insert data into the database
        foreach ($customers as $customer) {
            Customers::create($customer);
        }
    }
}

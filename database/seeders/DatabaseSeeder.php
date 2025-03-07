<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Cust',
        //     'username' => 'cust',
        //     'email' => 'cust@gmail.com',
        //     'password'=> bcrypt('password'),
        // ]);

        // Customer::create([
        //     'users' => 1,
        //     'identity_number' => '1234567890',
        //     'identity_scan_path' => 'identity_scan_path',
        //     'address' => 'address',
        //     'location_image_path' => 'location_image_path',
        //     'phone_number' => '1234567890',
        // ]);
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('password'),
            'role_id' => Role::firstOrCreate(['name' => 'admin'])->id
        ]);
    }
}

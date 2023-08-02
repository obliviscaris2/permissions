<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@superadmin.com',
            'password' => Hash::make('password'),
            'is_active' => 1,
            'role' => 1,
            'district_id' => 78,
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'is_active' => 1,
            'role' => 2
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'is_active' => 1,
            'role' => 3
        ]);

        // FOR TEST PURPOSES 
        User::create([
            'name' => 'kathmandu_admin',
            'email' => 'kathmandu@admin.com',
            'password' => Hash::make('password'),
            'is_active' => 1,
            'role' => 2,
            'district_id' => 20
        ]);
        
        User::create([
            'name' => 'bhaktapur_admin',
            'email' => 'bhaktapur@admin.com',
            'password' => Hash::make('password'),
            'is_active' => 1,
            'role' => 2,
            'district_id' => 18
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            Role_PermissionSeeder::class,
            StateSeeder::class,
            DistrictSeeder::class,
            UserSeeder::class,
            LocalGovernmentSeeder::class,
        ]);
    }
}

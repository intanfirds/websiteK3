<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MRolesTableSeeder::class,
            MStoresTableSeeder::class,
            MCautionsTableSeeder::class,
            MRegulationsTableSeeder::class,
            TUsersTableSeeder::class,
        ]);
    }
}
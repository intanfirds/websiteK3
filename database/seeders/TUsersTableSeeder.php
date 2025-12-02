<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TUsersTableSeeder extends Seeder
{
    public function run()
    {
        // Insert users
        $users = [
            [
                'store_id' => 1,
                'name' => 'Admin Area',
                'email' => 'admin@familymart.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_id' => 1,
                'name' => 'Budi Santoso - Store Manager',
                'email' => 'budi.santoso@familymart.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'store_id' => 1,
                'name' => 'Siti Rahayu - Staff',
                'email' => 'siti.rahayu@familymart.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('t_users')->insert($users);

        // Assign roles to users
        DB::table('t_role_user')->insert([
            ['user_id' => 1, 'role_id' => 1], // Admin Area
            ['user_id' => 2, 'role_id' => 2], // Store Manager
            ['user_id' => 3, 'role_id' => 3], // Staff
        ]);
    }
}
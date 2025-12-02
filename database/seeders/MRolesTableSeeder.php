<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MRolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_roles')->insert([
            ['name' => 'admin_area', 'description' => 'Admin Area - Super Admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'store_manager', 'description' => 'Kepala Toko / Store Manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'staff', 'description' => 'Karyawan Toko / Staff', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
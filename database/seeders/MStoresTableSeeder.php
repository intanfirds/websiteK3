<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MStoresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_stores')->insert([
            [
                'code' => 'FML-JML01',
                'name' => 'Familymart Jatimulyo Malang',
                'address' => 'Jl. Jatimulyo No. 123, Malang, Jawa Timur',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
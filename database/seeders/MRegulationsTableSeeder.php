<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MRegulationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_regulations')->insert([
            [
                'title' => 'Undang-Undang No. 1 Tahun 1970',
                'category' => 'Undang-Undang',
                'body' => 'Tentang Keselamatan Kerja. Mengatur tentang kewajiban pengurus dan pengusaha untuk melindungi keselamatan pekerja.',
                'file_path' => 'regulations/uu-1-tahun-1970.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Permenaker No. 5 Tahun 2018',
                'category' => 'Peraturan Menteri',
                'body' => 'Tentang Keselamatan dan Kesehatan Kerja Lingkungan Kerja. Mengatur tentang persyaratan K3 di tempat kerja termasuk sektor ritel.',
                'file_path' => 'regulations/permenaker-5-tahun-2018.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PP No. 50 Tahun 2012',
                'category' => 'Peraturan Pemerintah',
                'body' => 'Tentang Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja. Wajib diterapkan perusahaan dengan risiko tinggi.',
                'file_path' => 'regulations/pp-50-tahun-2012.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Permenaker No. 38 Tahun 2016',
                'category' => 'Peraturan Menteri',
                'body' => 'Tentang K3 Pesawat Tenaga dan Produksi. Mengatur tentang pengoperasian alat-alat seperti freezer dan kompresor.',
                'file_path' => 'regulations/permenaker-38-tahun-2016.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
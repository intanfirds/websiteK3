<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MCautionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_cautions')->insert([
            [
                'title' => 'Awas Lantai Licin',
                'meaning' => 'Peringatan bahwa lantai dalam kondisi licin dan berpotensi menyebabkan tergelincir.',
                'potential_danger' => 'Tergelincir, jatuh, cedera tulang, memar.',
                'installation_location' => 'Area freezer, depan lemari pendingin, kamar mandi karyawan, area cuci tangan.',
                'image_path' => 'cautions/floor-wet-sign.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Hati-hati Pisau Cutter',
                'meaning' => 'Peringatan penggunaan pisau cutter yang dapat menyebabkan luka potong.',
                'potential_danger' => 'Luka potong, perdarahan, infeksi.',
                'installation_location' => 'Area gudang, meja packing, area pembukaan kardus.',
                'image_path' => 'cautions/cutter-warning-sign.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dilarang Merokok',
                'meaning' => 'Larangan merokok di area tersebut untuk mencegah kebakaran.',
                'potential_danger' => 'Kebakaran, polusi udara, gangguan pernafasan.',
                'installation_location' => 'Seluruh area dalam toko, gudang, ruang istirahat.',
                'image_path' => 'cautions/no-smoking-sign.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Titik Kumpul Darurat',
                'meaning' => 'Menunjukkan lokasi berkumpul saat terjadi keadaan darurat.',
                'potential_danger' => '-',
                'installation_location' => 'Area parkir, tempat terbuka yang aman dari bangunan.',
                'image_path' => 'cautions/assembly-point-sign.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'APAR (Alat Pemadam Api Ringan)',
                'meaning' => 'Menunjukkan lokasi alat pemadam kebakaran.',
                'potential_danger' => '-',
                'installation_location' => 'Dekat pintu masuk, area dapur, dekat panel listrik.',
                'image_path' => 'cautions/fire-extinguisher-sign.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run(): void
    {

        Education::create([
            'degree' => 'Teknik Informatika',
            'institution' => 'Universitas Muhammadiyah Surakarta',
            'description' => 'Fokus pada rekayasa perangkat lunak, pemrograman web, dan arsitektur sistem. Aktif dalam kegiatan komunitas IT kampus dan proyek pengembangan perangkat lunak.',
            'start_date' => '2022-08-01',
            'end_date' => '2026-07-01',
            'is_current' => true,
        ]);

        Education::create([
            'degree' => 'Teknik Komputer dan Jaringan',
            'institution' => 'SMK Negeri 1 Tuban',
            'description' => 'Mempelajari dasar-dasar infrastruktur jaringan komputer, administrasi server, perakitan PC, dan pemecahan masalah (troubleshooting) sistem operasi.',
            'start_date' => '2018-07-01',
            'end_date' => '2021-06-01',
            'is_current' => false,
        ]);

        
    }
}

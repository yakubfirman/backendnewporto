<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {

        Experience::create([
            'title' => 'Full-Stack Web Developer',
            'company' => 'Freelance',
            'description' => 'Mengembangkan berbagai solusi aplikasi web kustom untuk klien dengan memanfaatkan stack modern seperti Laravel, React.js, Next.js, SQL, dan Wordpress guna memenuhi kebutuhan bisnis.',
            'start_date' => '2024-01-01',
            'end_date' => null,
            'is_current' => true,
            'type' => 'work',
        ]);

        Experience::create([
            'title' => 'Web Developer Intern',
            'company' => 'Diskominfo SP Surakarta',
            'description' => 'Berkontribusi dalam pengembangan dan optimalisasi performa sistem manajemen data publik (SiData) untuk mendukung efisiensi layanan informasi pemerintah daerah. Menggunakan teknologi Laravel dan Tailwind.',
            'start_date' => '2025-04-01',
            'end_date' => '2025-05-31',
            'is_current' => false,
            'type' => 'work',
        ]);

        Experience::create([
            'title' => 'IT Support Intern',
            'company' => 'FIF Group Tuban',
            'description' => 'Mendukung operasional harian IT di lingkungan kantor, termasuk troubleshooting perangkat keras dan jaringan. Membantu instalasi software dan update sistem komputer karyawan untuk mendukung kelancaran bisnis operasional.',
            'start_date' => '2020-02-01',
            'end_date' => '2020-04-30',
            'is_current' => false,
            'type' => 'work',
        ]);

        Experience::create([
            'title' => 'Speaker & Mentor',
            'company' => 'Tech Community Surakarta',
            'description' => 'Pembicara rutin di seminar dan workshop tentang literasi media, pengembangan web frontend, dan teknologi web modern. Membimbing developer junior di komunitas teknologi lokal.',
            'start_date' => '2023-01-01',
            'end_date' => null,
            'is_current' => true,
            'type' => 'speaker',
        ]);

        Experience::create([
            'title' => 'Ketua Divisi IT',
            'company' => 'Himpunan Mahasiswa Teknik Informatika',
            'description' => 'Bertanggung jawab atas pengelolaan infrastruktur IT kampus dan menyelenggarakan acara teknologi tahunan.',
            'start_date' => '2023-08-01',
            'end_date' => '2024-08-01',
            'is_current' => false,
            'type' => 'organization',
        ]);

        
    }
}

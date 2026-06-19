<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('testimonials')->insert([
            [
                'name' => 'Budi Santoso',
                'role' => 'Project Manager at TechCorp',
                'content' => 'Yakub adalah developer yang luar biasa. Ia sangat cepat dalam menangani berbagai permasalahan teknis dan hasil kerjanya selalu memuaskan. Komunikasi yang baik membuatnya sangat mudah untuk diajak bekerja sama.',
                'image' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=random',
                'is_published' => true,
                'created_at' => clone $now->subDays(5),
                'updated_at' => clone $now->subDays(5),
            ],
            [
                'name' => 'Siti Aminah',
                'role' => 'CEO at Startup ID',
                'content' => 'Sangat merekomendasikan Yakub untuk proyek-proyek web development. Dia tidak hanya mengerti aspek teknis, tapi juga memberikan masukan yang sangat berharga dari sisi SEO dan pengalaman pengguna (UI/UX).',
                'image' => 'https://ui-avatars.com/api/?name=Siti+Aminah&background=random',
                'is_published' => true,
                'created_at' => clone $now->subDays(2),
                'updated_at' => clone $now->subDays(2),
            ],
            [
                'name' => 'Andi Wijaya',
                'role' => 'Freelance Designer',
                'content' => 'Kerja bareng Yakub itu asik. Desain yang saya buat bisa direalisasikan ke dalam bentuk website pixel-perfect. Sangat detail dan rapi.',
                'image' => 'https://ui-avatars.com/api/?name=Andi+Wijaya&background=random',
                'is_published' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

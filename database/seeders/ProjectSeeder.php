<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'title' => 'AI Sales Page Generator',
            'slug' => 'ai-sales-page-generator',
            'description' => 'AI Sales Page Generator adalah aplikasi web full-stack yang memungkinkan pengguna membuat landing page produk secara otomatis menggunakan kecerdasan buatan.',
            'content' => '<p>AI Sales Page Generator adalah aplikasi web full-stack yang memungkinkan pengguna membuat landing page produk secara otomatis menggunakan kecerdasan buatan. Aplikasi ini dirancang untuk membantu pengusaha dan pemasar membuat konten penjualan yang persuasif dengan cepat.</p>',
            'image' => 'https://res.cloudinary.com/dkvh7cohu/image/upload/v1778147636/mxl4sezvtzbmpog1h7vr.png',
            'categories' => ['Full Stack'],
            'tech_stack' => ['Next.js', 'React', 'Tailwind CSS', 'OpenAI API', 'Cloudinary'],
            'url' => 'https://firmanduoduo.vercel.app/projects/ai-sales-page-generator',
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Personal Web Portofolio Maharani Rizka',
            'slug' => 'web-portofolio-maharani-rizka',
            'description' => 'Website portofolio satu halaman (one-page website) yang dirancang khusus untuk Maharani Rizka Ramadhani Wijaya dengan fokus pada personal branding yang profesional dan modern.',
            'content' => '<p>Proyek ini adalah pengembangan sebuah website portofolio satu halaman (one-page website) yang dirancang khusus untuk Maharani Rizka Ramadhani Wijaya. Fokus utama proyek ini adalah membangun personal branding yang profesional, modern, namun tetap ramah dan dapat diakses.</p>',
            'image' => 'https://res.cloudinary.com/dkvh7cohu/image/upload/v1776276033/qw2ehvzzyzlermij5hxq.png',
            'categories' => ['Full Stack', 'SEO & AIO'],
            'tech_stack' => ['Next.js', 'React', 'Tailwind CSS', 'Framer Motion', 'SEO'],
            'url' => 'https://firmanduoduo.vercel.app/projects/web-portofolio-maharani-rizka',
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Maroon Vote',
            'slug' => 'maroon-vote',
            'description' => 'Aplikasi e-voting berbasis web menggunakan Laravel dan React dengan konsep modern monolith untuk menciptakan sistem pemungutan suara yang aman dan efisien.',
            'content' => '<p>Mengembangkan aplikasi e-voting berbasis web menggunakan Laravel dan React dengan konsep modern monolith untuk menciptakan sistem pemungutan suara yang aman dan efisien. Maroon Vote dirancang khusus untuk kebutuhan organisasi dalam melakukan pemilihan secara digital.</p>',
            'image' => 'https://res.cloudinary.com/dkvh7cohu/image/upload/v1776276550/tyuovflvnk0qsbdqwd1x.png',
            'categories' => ['Full Stack', 'SEO & AIO'],
            'tech_stack' => ['Laravel', 'React', 'Inertia.js', 'MySQL', 'Tailwind CSS'],
            'url' => 'https://maroonvote.immsolo.or.id',
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Website PC IMM Kota Surakarta',
            'slug' => 'imm-solo',
            'description' => 'Website resmi untuk PC IMM Kota Surakarta menggunakan WordPress dan Elementor, menampilkan informasi organisasi, kegiatan, dan berita terkini.',
            'content' => '<p>Membangun website resmi untuk PC IMM Kota Surakarta menggunakan WordPress dan Elementor, menampilkan informasi organisasi, kegiatan, dan berita terkini dengan desain responsif dan modern.</p>',
            'image' => 'https://res.cloudinary.com/dkvh7cohu/image/upload/v1776276522/otzkd1tsn0gdyxwqjv10.png',
            'categories' => ['Frontend', 'SEO & AIO'],
            'tech_stack' => ['WordPress', 'Elementor', 'PHP', 'MySQL', 'SEO'],
            'url' => 'https://immsolo.or.id',
            'github_url' => null,
            'is_highlighted' => false,
        ]);

        Project::create([
            'title' => 'Website Perkaderan PC IMM Kota Surakarta',
            'slug' => 'perkaderan-imm',
            'description' => 'Website manajemen perkaderan PC IMM Kota Surakarta dengan fokus pada peningkatan visibilitas di mesin pencari melalui strategi SEO teknis.',
            'content' => '<p>Mengelola dan mengoptimalkan website perkaderan PC IMM Kota Surakarta dengan fokus pada peningkatan visibilitas di mesin pencari melalui strategi SEO teknis dan on-page.</p>',
            'image' => 'https://res.cloudinary.com/dkvh7cohu/image/upload/v1776276598/y4wazkm1hbl80stuh2li.png',
            'categories' => ['SEO & AIO'],
            'tech_stack' => ['WordPress', 'SEO Specialist', 'Google Search Console', 'Analytics'],
            'url' => 'https://perkaderan.immsolo.or.id',
            'github_url' => null,
            'is_highlighted' => false,
        ]);

        Project::create([
            'title' => 'SiData DISKOMINFO SP Kota Surakarta',
            'slug' => 'sidata',
            'description' => 'Aplikasi SiData dikembangkan selama program magang di DISKOMINFO SP Kota Surakarta menggunakan Laravel dan Tailwind CSS.',
            'content' => '<p>Menjalankan program magang sebagai Web Developer di Dinas Komunikasi, Informatika, Statistik dan Persandian (DISKOMINFO SP) Kota Surakarta, berkontribusi pada pengembangan aplikasi SiData menggunakan Laravel dan Tailwind CSS.</p>',
            'image' => 'https://firmanduoduo.vercel.app/projects/sidata.png',
            'categories' => ['Full Stack'],
            'tech_stack' => ['Laravel', 'Tailwind CSS', 'MySQL', 'PHP'],
            'url' => null,
            'github_url' => null,
            'is_highlighted' => false,
        ]);
    }
}

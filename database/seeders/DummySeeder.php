<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Skill;
use App\Models\Setting;

class DummySeeder extends Seeder
{
    public function run(): void
    {
        // ============================================================
        // PROJECTS
        // ============================================================
        Project::create([
            'title' => 'Platform E-Commerce',
            'slug' => 'platform-e-commerce',
            'description' => 'Platform e-commerce berfitur lengkap yang dibangun dengan Next.js dan Laravel, menampilkan inventaris waktu nyata, integrasi gateway pembayaran, dan dasbor admin.',
            'content' => '<h2>Ikhtisar Proyek</h2><p>Platform e-commerce ini dibangun dari awal untuk menangani ribuan transaksi harian. Menampilkan arsitektur headless dengan Next.js untuk etalase dan Laravel sebagai API backend.</p><h2>Fitur Utama</h2><ul><li>Manajemen inventaris waktu nyata</li><li>Integrasi beberapa gateway pembayaran (Midtrans, Stripe)</li><li>Pencarian dan pemfilteran produk tingkat lanjut</li><li>Sistem ulasan dan peringkat pelanggan</li><li>Dasbor admin dengan analitik</li></ul><h2>Tantangan Teknis</h2><p>Salah satu tantangan utama adalah mengimplementasikan pembaruan stok waktu nyata di banyak pengguna bersamaan. Kami menyelesaikannya menggunakan penguncian tingkat database dan notifikasi WebSocket.</p>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Laravel', 'MySQL', 'Tailwind CSS', 'Midtrans'],
            'url' => 'https://example-shop.com',
            'github_url' => 'https://github.com/yakubfirman/ecommerce',
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Dasbor Fintech',
            'slug' => 'dasbor-fintech',
            'description' => 'Dasbor teknologi keuangan modern dengan visualisasi data waktu nyata, pemantauan transaksi, dan alat pelaporan komprehensif.',
            'content' => '<h2>Tentang Proyek Ini</h2><p>Dasbor fintech komprehensif yang dirancang untuk startup keuangan. Dasbor ini menyediakan pemantauan transaksi waktu nyata, analitik pengguna, dan laporan keuangan.</p><h2>Fitur</h2><ul><li>Pemantauan transaksi waktu nyata</li><li>Grafik interaktif dan visualisasi data</li><li>Kontrol akses berbasis peran</li><li>Pembuatan laporan otomatis (PDF/Excel)</li><li>Dukungan mode gelap</li></ul>',
            'image' => null,
            'tech_stack' => ['React', 'TypeScript', 'Chart.js', 'Node.js', 'PostgreSQL'],
            'url' => 'https://fintech-demo.com',
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Halaman Landas SaaS',
            'slug' => 'halaman-landas-saas',
            'description' => 'Halaman landas SaaS berkonversi tinggi dengan optimasi SEO, mencapai skor PageSpeed 95+ dan peringkat 3 besar Google.',
            'content' => '<h2>Tujuan Proyek</h2><p>Klien membutuhkan halaman landas yang tidak hanya terlihat indah tetapi juga mendapat peringkat tinggi di Google untuk kata kunci target mereka. Kami memberikan halaman dengan skor 98 PageSpeed Insight.</p><h2>Strategi SEO</h2><ul><li>Struktur HTML5 semantik</li><li>Markup Skema JSON-LD</li><li>Core Web Vitals yang Dioptimalkan (LCP, FID, CLS)</li><li>Server-Side Rendering untuk pengiriman konten instan</li></ul>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Tailwind CSS', 'Vercel', 'SEO'],
            'url' => 'https://saas-example.com',
            'github_url' => 'https://github.com/yakubfirman/saas-landing',
            'is_highlighted' => false,
        ]);

        Project::create([
            'title' => 'Sistem POS Restoran',
            'slug' => 'sistem-pos-restoran',
            'description' => 'Sistem point-of-sale untuk jaringan restoran dengan tampilan dapur, manajemen pesanan, dan pelaporan waktu nyata.',
            'content' => '<h2>Ikhtisar</h2><p>Membangun sistem POS kustom untuk jaringan restoran yang berkembang di Jawa Tengah. Sistem menangani manajemen pesanan, layar tampilan dapur, dan menghasilkan laporan keuangan harian.</p><h2>Fitur</h2><ul><li>Antarmuka pesanan yang dioptimalkan untuk layar sentuh</li><li>Sistem tampilan dapur (KDS)</li><li>Manajemen meja dan reservasi</li><li>Laporan penjualan dan inventaris harian</li><li>Dukungan multi-cabang</li></ul>',
            'image' => null,
            'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Electron'],
            'url' => null,
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Desain Ulang Website Perusahaan',
            'slug' => 'desain-ulang-website-perusahaan',
            'description' => 'Desain ulang lengkap website perusahaan dengan UI modern, peningkatan UX, dan perombakan SEO komprehensif yang menghasilkan 3x lalu lintas organik.',
            'content' => '<h2>Tantangan</h2><p>Situs web lama klien tertinggal, lambat, dan hampir tidak terlihat di mesin pencari. Mereka membutuhkan perombakan total yang akan memodernisasi kehadiran online mereka dan mendorong lalu lintas organik.</p><h2>Hasil</h2><ul><li>Peningkatan 3x lalu lintas organik dalam 3 bulan</li><li>Skor PageSpeed meningkat dari 32 menjadi 96</li><li>Rasio pentalan menurun sebesar 45%</li><li>Rata-rata durasi sesi meningkat sebesar 60%</li></ul>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Tailwind CSS', 'Laravel', 'SEO'],
            'url' => 'https://corporate-demo.com',
            'github_url' => null,
            'is_highlighted' => false,
        ]);

        // ============================================================
        // EXPERIENCES
        // ============================================================
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

        // ============================================================
        // EDUCATION
        // ============================================================
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

        // ============================================================
        // BLOG POSTS
        // ============================================================
        Post::create([
            'title' => 'Memulai dengan Headless CMS: Laravel + Next.js',
            'slug' => 'memulai-dengan-headless-cms-laravel-nextjs',
            'excerpt' => 'Pelajari cara membangun arsitektur web yang modern dan terukur dengan memisahkan frontend dan backend menggunakan Laravel sebagai API dan Next.js sebagai lapisan UI.',
            'content' => '<h2>Apa itu Headless CMS?</h2><p>Headless CMS adalah sistem manajemen konten yang menyediakan konten melalui API, tanpa lapisan frontend bawaan. Hal ini memberikan kebebasan kepada developer untuk menggunakan framework frontend apapun sambil menjaga pengalaman manajemen konten tetap sederhana untuk editor.</p><h2>Mengapa Laravel + Next.js?</h2><p>Laravel unggul dalam membangun API yang kuat dengan fitur seperti Eloquent ORM, autentikasi bawaan (Sanctum), dan ekosistem yang sangat baik. Next.js, di sisi lain, menyediakan rendering sisi server, pembuatan situs statis, dan pengalaman developer yang luar biasa.</p><h2>Menyiapkan Laravel sebagai API</h2><p>Pertama, buat proyek Laravel baru dan konfigurasikan untuk mode API saja. Instal Sanctum untuk autentikasi dan siapkan model serta migrasi Anda.</p><pre><code>composer create-project laravel/laravel backend\ncd backend\nphp artisan install:api</code></pre><h2>Membangun Frontend Next.js</h2><p>Buat aplikasi Next.js Anda dan atur lapisan pengambilan data. Gunakan Komponen Server untuk halaman penting SEO dan Komponen Klien untuk elemen interaktif.</p><pre><code>npx create-next-app@latest frontend\ncd frontend\nnpm run dev</code></pre><h2>Kesimpulan</h2><p>Pendekatan headless memberi Anda yang terbaik dari kedua dunia: backend manajemen konten yang kuat dan frontend yang sangat cepat dan dioptimalkan untuk SEO. Ini adalah arsitektur masa depan.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-06-10 10:00:00',
        ]);

        Post::create([
            'title' => 'Praktik Terbaik SEO untuk Aplikasi React & Next.js',
            'slug' => 'praktik-terbaik-seo-untuk-aplikasi-react-nextjs',
            'excerpt' => 'Panduan komprehensif tentang pengoptimalan aplikasi halaman tunggal (SPA) untuk mesin telusur, crawler AI, dan mencapai skor Core Web Vitals tertinggi.',
            'content' => '<h2>Tantangan SEO dengan SPA</h2><p>Aplikasi halaman tunggal (SPA) secara historis kesulitan dengan SEO karena crawler mesin pencari kesulitan mengindeks konten yang dirender JavaScript. Next.js menyelesaikan ini dengan Rendering Sisi Server (SSR) dan Pembuatan Situs Statis (SSG).</p><h2>Meta Tag Penting</h2><p>Setiap halaman harus memiliki tag judul yang unik, deskripsi meta, dan tag Open Graph. Di Next.js, gunakan fungsi <code>generateMetadata</code> untuk halaman dinamis.</p><h2>Markup Skema JSON-LD</h2><p>Data terstruktur membantu mesin pencari memahami konten Anda dengan lebih baik. Terapkan skema Orang, Artikel, dan Organisasi menggunakan format JSON-LD.</p><h2>Core Web Vitals</h2><p>Google menggunakan Core Web Vitals sebagai sinyal peringkat. Fokus pada:</p><ul><li><strong>LCP (Largest Contentful Paint):</strong> Targetkan kurang dari 2,5 detik</li><li><strong>INP (Interaction to Next Paint):</strong> Targetkan kurang dari 200 md</li><li><strong>CLS (Cumulative Layout Shift):</strong> Targetkan kurang dari 0,1</li></ul><h2>AIO - Optimasi AI</h2><p>Saat mesin telusur yang didukung AI menjadi lebih umum, pertimbangkan untuk membuat file <code>llm.txt</code> yang memberikan ringkasan terstruktur dari situs Anda untuk crawler AI.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-06-05 14:30:00',
        ]);

        Post::create([
            'title' => 'Membangun UI Indah dengan Animasi GSAP',
            'slug' => 'membangun-ui-indah-dengan-animasi-gsap',
            'excerpt' => 'Temukan cara menggunakan GSAP (Platform Animasi GreenSock) untuk membuat animasi yang halus dan profesional yang meningkatkan pengalaman pengguna dalam aplikasi web Anda.',
            'content' => '<h2>Mengapa GSAP?</h2><p>GSAP adalah standar emas untuk animasi web. Cepat, andal, dan berfungsi di semua browser utama. Tidak seperti animasi CSS, GSAP memberi Anda kontrol yang tepat atas rangkaian animasi kompleks.</p><h2>Memulai</h2><pre><code>npm install gsap\nimport gsap from "gsap";\nimport { ScrollTrigger } from "gsap/ScrollTrigger";\ngsap.registerPlugin(ScrollTrigger);</code></pre><h2>Animasi Terpicu Gulir</h2><p>Salah satu pola paling populer adalah mengungkapkan elemen saat pengguna menggulir halaman ke bawah. Dengan ScrollTrigger, ini menjadi sepele:</p><pre><code>gsap.from(".section-reveal", {\n  y: 50,\n  opacity: 0,\n  duration: 0.8,\n  scrollTrigger: {\n    trigger: ".section-reveal",\n    start: "top 85%",\n  },\n});</code></pre><h2>Tips Kinerja</h2><ul><li>Selalu animasikan properti <code>transform</code> dan <code>opacity</code> untuk akselerasi GPU</li><li>Gunakan <code>will-change</code> seperlunya</li><li>Bersihkan animasi di React dengan <code>gsap.context()</code></li></ul>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-05-28 09:00:00',
        ]);

        Post::create([
            'title' => 'Mengapa Headless CMS Adalah Masa Depan Web Development',
            'slug' => 'mengapa-headless-cms-masa-depan',
            'excerpt' => 'Eksplorasi mendalam tentang arsitektur Headless CMS dan mengapa semakin banyak perusahaan beralih dari CMS monolitik ke pendekatan decoupled.',
            'content' => '<h2>Evolusi CMS</h2><p>Dari WordPress monolitik hingga arsitektur headless modern, CMS terus berevolusi mengikuti kebutuhan developer dan bisnis yang semakin kompleks.</p><h2>Keunggulan Headless CMS</h2><ul><li><strong>Kecepatan:</strong> Frontend statis atau SSR jauh lebih cepat dari server-rendered PHP</li><li><strong>Fleksibilitas:</strong> Gunakan framework apapun untuk frontend</li><li><strong>Skalabilitas:</strong> Frontend dan backend bisa di-scale secara independen</li><li><strong>Keamanan:</strong> Surface area serangan lebih kecil karena frontend terpisah</li></ul><h2>Kapan Menggunakan Headless?</h2><p>Headless CMS cocok untuk proyek yang membutuhkan performa tinggi, multi-platform delivery, dan tim development yang mature. Untuk blog sederhana, WordPress masih bisa menjadi pilihan yang baik.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-05-15 11:00:00',
        ]);

        // ============================================================
        // SKILLS
        // ============================================================
        $skills = [
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90],
            ['name' => 'TypeScript', 'category' => 'Frontend', 'proficiency' => 85],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 95],
            ['name' => 'Python', 'category' => 'Backend', 'proficiency' => 80],
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 90],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency' => 85],
            ['name' => 'ReactJs', 'category' => 'Frontend', 'proficiency' => 88],
            ['name' => 'NextJs', 'category' => 'Frontend', 'proficiency' => 85],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 95],
            ['name' => 'Codeigniter', 'category' => 'Backend', 'proficiency' => 85],
            ['name' => 'Flask', 'category' => 'Backend', 'proficiency' => 80],
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill['name'],
                'category' => $skill['category'],
                'icon_svg' => null,
                'proficiency' => $skill['proficiency'],
            ]);
        }

        // ============================================================
        // SETTINGS
        // ============================================================
        Setting::create(['key' => 'site_name', 'group' => 'General Info', 'value' => 'Yakub Firman Mustofa']);
        Setting::create(['key' => 'site_description', 'group' => 'General Info', 'value' => 'Web Developer & SEO Specialist berdomisili di Surakarta']);
        Setting::create(['key' => 'contact_email', 'group' => 'General Info', 'value' => 'contact@yakubfirman.id']);
        Setting::create(['key' => 'github_url', 'group' => 'General Info', 'value' => 'https://github.com/yakubfirman']);
        Setting::create(['key' => 'linkedin_url', 'group' => 'General Info', 'value' => 'https://linkedin.com/in/yakubfirman']);
        Setting::create(['key' => 'profile_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/about.jpg']);
        Setting::create(['key' => 'header_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/profile.jpg']);

        // Homepage Settings
        Setting::create(['key' => 'home_cta_title', 'group' => 'Homepage - CTA Section', 'type' => 'string', 'value' => "Mari Bangun Sesuatu yang Luar Biasa Bersama"]);
        Setting::create(['key' => 'home_cta_description', 'group' => 'Homepage - CTA Section', 'type' => 'text', 'value' => 'Baik Anda membutuhkan aplikasi web full-stack, peningkatan peringkat pencarian, atau perombakan merek menyeluruh — saya di sini untuk membantu.']);

        Setting::create(['key' => 'home_about_heading', 'group' => 'Homepage - About Section', 'type' => 'string', 'value' => 'Mengubah masalah kompleks menjadi solusi elegan!']);
        Setting::create(['key' => 'home_about_text', 'group' => 'Homepage - About Section', 'type' => 'text', 'value' => "Saya lulusan Teknik Informatika (2026) yang berdomisili di Surakarta, Jawa Tengah. Saya berspesialisasi dalam membangun arsitektur Headless CMS yang kuat menggunakan Laravel dan Next.js, menjembatani logika backend yang kuat dan pengalaman frontend yang mulus.\n\nSelain menulis kode yang bersih, saya sangat bersemangat tentang SEO dan performa web. Saya juga aktif berbagi pengetahuan sebagai pembicara di berbagai seminar dan lokakarya teknologi, dengan fokus pada pengembangan frontend dan literasi media."]);
        
        // About Page Settings
        Setting::create(['key' => 'about_page_heading', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Siapa Saya']);
        Setting::create(['key' => 'about_page_text', 'group' => 'About Page - Main Section', 'type' => 'text', 'value' => "Saya adalah Yakub Firman Mustofa, seorang Web Developer dan SEO Specialist yang berdomisili di Surakarta, Jawa Tengah. Dengan latar belakang TI yang kuat, saya mengkhususkan diri dalam membangun aplikasi web berkinerja tinggi yang tidak hanya terlihat bagus tetapi juga mendapat peringkat yang baik di mesin pencari.\n\nPendekatan saya menggabungkan keunggulan teknis dengan pemikiran strategis. Saya percaya pada arsitektur Headless CMS, kode yang rapi, dan desain yang berpusat pada pengguna untuk menghasilkan produk digital yang menonjol."]);
        Setting::create(['key' => 'stats_clients', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => '15+']);
        Setting::create(['key' => 'about_fact_location', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Surakarta, Jawa Tengah']);
        Setting::create(['key' => 'about_fact_availability', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Terbuka untuk bekerja']);
        Setting::create(['key' => 'about_fact_focus', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Full-stack & SEO']);
        
        // Footer Settings
        Setting::create(['key' => 'footer_text', 'group' => 'Footer Section', 'type' => 'text', 'value' => 'Seorang Pengembang Web Full-stack & Spesialis SEO yang penuh semangat, berdedikasi untuk membangun pengalaman digital berkinerja tinggi.']);
    }
}

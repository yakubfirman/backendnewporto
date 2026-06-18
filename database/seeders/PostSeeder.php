<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {

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

        
    }
}

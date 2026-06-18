<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {

        Setting::create(['key' => 'site_name', 'group' => 'General Info', 'value' => 'Yakub Firman Mustofa']);
        Setting::create(['key' => 'site_description', 'group' => 'General Info', 'value' => 'Web Developer & SEO Specialist berdomisili di Surakarta']);
        Setting::create(['key' => 'contact_email', 'group' => 'General Info', 'value' => 'contact@yakubfirman.id']);
        Setting::create(['key' => 'github_url', 'group' => 'General Info', 'value' => 'https://github.com/yakubfirman']);
        Setting::create(['key' => 'linkedin_url', 'group' => 'General Info', 'value' => 'https://linkedin.com/in/yakubfirman']);
        Setting::create(['key' => 'profile_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/about.jpg']);
        Setting::create(['key' => 'header_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/profile.jpg']);
        Setting::create(['key' => 'og_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '']);

        // Homepage Settings
        Setting::create(['key' => 'home_cta_title', 'group' => 'Homepage - CTA Section', 'type' => 'string', 'value' => "Mari Bangun Sesuatu yang Luar Biasa Bersama"]);
        Setting::create(['key' => 'home_cta_description', 'group' => 'Homepage - CTA Section', 'type' => 'text', 'value' => 'Baik Anda membutuhkan aplikasi web full-stack, peningkatan peringkat pencarian, atau perombakan merek menyeluruh — saya di sini untuk membantu.']);

        Setting::create(['key' => 'home_about_heading', 'group' => 'Homepage - About Section', 'type' => 'string', 'value' => 'Mengubah masalah kompleks menjadi solusi elegan!']);
        Setting::create(['key' => 'home_about_text', 'group' => 'Homepage - About Section', 'type' => 'text', 'value' => "Saya adalah Yakub Firman Mustofa, seorang Web Developer, SEO Specialist dan System Analist yang berdomisili di Surakarta, Jawa Tengah. Dengan latar belakang TI yang kuat, saya mengkhususkan diri dalam membangun aplikasi web berkinerja tinggi yang tidak hanya terlihat bagus tetapi juga mendapat peringkat yang baik di mesin pencari.\n\nPendekatan saya menggabungkan keunggulan teknis dengan pemikiran strategis. Saya percaya pada arsitektur Headless CMS, kode yang rapi, dan desain yang berpusat pada pengguna untuk menghasilkan produk digital yang menonjol."]);
        
        // About Page Settings
        Setting::create(['key' => 'about_page_heading', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Siapa Saya']);
        Setting::create(['key' => 'about_page_text', 'group' => 'About Page - Main Section', 'type' => 'text', 'value' => "Saya adalah Yakub Firman Mustofa, seorang Web Developer, SEO Specialist dan System Analist yang berdomisili di Surakarta, Jawa Tengah. Dengan latar belakang TI yang kuat, saya mengkhususkan diri dalam membangun aplikasi web berkinerja tinggi yang tidak hanya terlihat bagus tetapi juga mendapat peringkat yang baik di mesin pencari.\n\nPendekatan saya menggabungkan keunggulan teknis dengan pemikiran strategis. Saya percaya pada arsitektur Headless CMS, kode yang rapi, dan desain yang berpusat pada pengguna untuk menghasilkan produk digital yang menonjol."]);
        Setting::create(['key' => 'stats_clients', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => '15+']);
        Setting::create(['key' => 'about_fact_location', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Surakarta, Jawa Tengah']);
        Setting::create(['key' => 'about_fact_availability', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Terbuka untuk berkolaborasi']);
        Setting::create(['key' => 'about_fact_focus', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Web Developer, SEO Specialist, & System Analist']);
        
        // Footer Settings
        Setting::create(['key' => 'footer_text', 'group' => 'Footer Section', 'type' => 'text', 'value' => 'Seorang Web Developer, Spesialis SEO dan System Analis yang penuh semangat, berdedikasi untuk membangun pengalaman digital berkinerja tinggi.']);

    }
}

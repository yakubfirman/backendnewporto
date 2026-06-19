<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialMediaSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('social_media')->insert([
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/yakubfirman',
                'icon_url' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/github.svg',
                'is_active' => true,
                'order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com/in/yakubfirman',
                'icon_url' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/linkedin.svg',
                'is_active' => true,
                'order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://instagram.com/yakub_firman',
                'icon_url' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/instagram.svg',
                'is_active' => true,
                'order' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Twitter',
                'url' => 'https://twitter.com/yakubfirman',
                'icon_url' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/twitter.svg',
                'is_active' => true,
                'order' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

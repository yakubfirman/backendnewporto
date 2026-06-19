<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Yakub Firman Mustofa',
            'email' => 'yakubfirmanmustofa@gmail.com',
            'password' => bcrypt('@FIRMANlogin05'),
        ]);

        $this->call([
            ProjectSeeder::class,
            ExperienceSeeder::class,
            EducationSeeder::class,
            PostSeeder::class,
            SkillSeeder::class,
            SettingSeeder::class,
            SocialMediaSeeder::class,
            TestimonialSeeder::class,
            CommentSeeder::class,
        ]);
    }
}

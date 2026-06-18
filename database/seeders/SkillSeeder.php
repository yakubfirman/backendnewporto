<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {

        $skills = [
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90, 'svg_name' => 'javascript'],
            ['name' => 'TypeScript', 'category' => 'Frontend', 'proficiency' => 85, 'svg_name' => 'typescript'],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 95, 'svg_name' => 'php'],
            ['name' => 'Python', 'category' => 'Backend', 'proficiency' => 80, 'svg_name' => 'python'],
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 90, 'svg_name' => 'mysql'],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency' => 85, 'svg_name' => 'postgresql'],
            ['name' => 'ReactJs', 'category' => 'Frontend', 'proficiency' => 88, 'svg_name' => 'react'],
            ['name' => 'NextJs', 'category' => 'Frontend', 'proficiency' => 85, 'svg_name' => 'nextdotjs'],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 95, 'svg_name' => 'laravel'],
            ['name' => 'Codeigniter', 'category' => 'Backend', 'proficiency' => 85, 'svg_name' => 'codeigniter'],
            ['name' => 'Flask', 'category' => 'Backend', 'proficiency' => 80, 'svg_name' => 'flask'],
        ];

        foreach ($skills as $skill) {
            $iconUrl = 'https://thesvg.org/icons/' . $skill['svg_name'] . '/default.svg';

            Skill::create([
                'name' => $skill['name'],
                'category' => $skill['category'],
                'icon_svg' => $iconUrl,
                'proficiency' => $skill['proficiency'],
            ]);
        }

        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        $posts = Post::all();

        if ($posts->isEmpty()) {
            return;
        }

        $post1 = $posts->first();
        $post2 = $posts->skip(1)->first();

        // Main Comments
        $comment1Id = DB::table('comments')->insertGetId([
            'post_id' => $post1->id,
            'name' => 'Ahmad Rizal',
            'content' => 'Artikel yang sangat bermanfaat! Terima kasih atas penjelasannya.',
            'is_approved' => true,
            'parent_id' => null,
            'created_at' => clone $now->subDays(2),
            'updated_at' => clone $now->subDays(2),
        ]);

        $comment2Id = DB::table('comments')->insertGetId([
            'post_id' => $post1->id,
            'name' => 'Faisal Tanjung',
            'content' => 'Apakah ada rekomendasi framework lain untuk pemula?',
            'is_approved' => true,
            'parent_id' => null,
            'created_at' => clone $now->subDays(1),
            'updated_at' => clone $now->subDays(1),
        ]);

        if ($post2) {
            DB::table('comments')->insert([
                'post_id' => $post2->id,
                'name' => 'Ratna Sari',
                'content' => 'Sangat informatif, ditunggu artikel selanjutnya!',
                'is_approved' => false,
                'parent_id' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        // Replies
        DB::table('comments')->insert([
            [
                'post_id' => $post1->id,
                'name' => 'Yakub Firman',
                'content' => 'Terima kasih, Ahmad! Semoga membantu proyek kamu.',
                'is_approved' => true,
                'parent_id' => $comment1Id,
                'created_at' => clone $now->subDays(1)->addHours(2),
                'updated_at' => clone $now->subDays(1)->addHours(2),
            ],
            [
                'post_id' => $post1->id,
                'name' => 'Yakub Firman',
                'content' => 'Untuk pemula, Laravel dan React sangat direkomendasikan karena ekosistemnya besar.',
                'is_approved' => true,
                'parent_id' => $comment2Id,
                'created_at' => clone $now->subHours(5),
                'updated_at' => clone $now->subHours(5),
            ]
        ]);
    }
}

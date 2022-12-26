<?php

namespace Database\Seeders;

use App\Models\Comment;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/comments.json");
        $comment = json_decode($json);

        foreach ($comment as $key => $value) {
            Comment::factory()->create([
                "content" => $value->content,
                "slug" => \Str::slug($value->content),
                "user_id" => $value->user_id,
                "subject_id" => $value->subject_id,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Answer;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/answers.json");
        $comment = json_decode($json);

        foreach ($comment as $key => $value) {
            Answer::create([
                "content" => $value->content,
                "slug" => \Str::slug($value->content),
                "user_id" => $value->user_id,
                "comment_id" => $value->subject_id,
            ]);
        }
    }
}

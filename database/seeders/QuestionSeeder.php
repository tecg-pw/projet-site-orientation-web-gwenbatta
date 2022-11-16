<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Tool;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/questions.json");
        $question = json_decode($json);

        foreach ($question as $key => $value) {
            Question::create([
                "question" => $value->question,
                "slug" => \Str::slug($value->question),
                "description" => $value->description,
            ]);
        }
    }
}

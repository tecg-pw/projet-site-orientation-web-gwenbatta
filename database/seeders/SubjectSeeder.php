<?php

namespace Database\Seeders;

use App\Models\Subject;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/subjects.json");
        $subject = json_decode($json);

        foreach ($subject as $key => $value) {
            Subject::factory()->create([
                "subject" => $value->subject,
                "slug" => \Str::slug($value->subject),
                "description" => $value->description,
                "tag_id" => $value->tag_id,
                "resolved" => $value->resolved,
                "user_id" => $value->user_id,
            ]);
        }
    }
}

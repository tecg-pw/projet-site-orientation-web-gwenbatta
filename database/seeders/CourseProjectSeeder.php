<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/classe_project.json");
        $courses = json_decode($json);

        foreach ($courses as $key => $value) {
            DB::table('course_projecttranslation')->insert([
                "project_id" => $value->project_id,
                "course_id" => $value->course_id
            ]);
        }
    }
}

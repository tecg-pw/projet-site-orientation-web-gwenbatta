<?php

namespace Database\Seeders;

use App\Models\Course;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/classes.json");
        $classes = json_decode($json);

        foreach ($classes as $key => $value) {
            Course::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name.$value->bac),
                "hours" => $value->hours,
                "bac" => $value->bac,
                "description" => $value->description,
            ]);
        }
    }
}

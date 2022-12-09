<?php

namespace Database\Seeders;

use App\Models\CourseTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/coursetranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            CourseTranslation::create([
                "name" => json_encode($value->name),
                "slug" => json_encode(\Str::slug($value->name.$value->bac)),
                "locale" => json_encode($value->locale),
                "hours" => $value->hours,
                "bac" => $value->bac,
                "description" => json_encode($value->description),
                "course_id"=>$value->course_id
            ]);
        }
    }
}

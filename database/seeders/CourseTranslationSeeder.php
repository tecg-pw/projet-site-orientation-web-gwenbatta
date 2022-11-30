<?php

namespace Database\Seeders;

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
            DB::table('coursetranslations')->insert([
                "name" => $value->name,
                "slug" => \Str::slug($value->name.$value->bac),
                "locale" => $value->locale,
                "hours" => $value->hours,
                "bac" => $value->bac,
                "description" => $value->description,
                "course_id"=>$value->course_id
            ]);
        }
    }
}

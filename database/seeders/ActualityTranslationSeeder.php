<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActualityTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/actualitytranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('actualitytranslations')->insert([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "excerpt" => $value->excerpt,
                "description" => $value->description,
                "lieu" => $value->lieu,
                "link" => $value->link,
                "main_picture" => $value->main_picture,
                "gallery" => $value->gallery,
                "actuality_id" => $value->actuality_id,
            ]);
        }
    }
}



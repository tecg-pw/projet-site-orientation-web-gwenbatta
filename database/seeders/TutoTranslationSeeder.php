<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutoTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tutotranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('tutotranslations')->insert([
                "locale" => $value->locale,
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "link" => $value->link,
                "excerpt" => $value->excerpt,
                "languages" => $value->languages,
                "tuto_id"=>$value->tuto_id
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/doctranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('doctranslations')->insert([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "link" => $value->link,
                "excerpt" => $value->excerpt,
                "doc_id"=>$value->doc_id
            ]);
        }
    }
}

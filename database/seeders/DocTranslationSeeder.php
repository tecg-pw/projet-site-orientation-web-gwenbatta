<?php

namespace Database\Seeders;

use App\Models\DocTranslation;
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
            DocTranslation::create([
                "name" => json_encode($value->name),
                "locale" => json_encode($value->locale),
                "slug" => json_encode(\Str::slug($value->name)),
                "link" => json_encode($value->link),
                "excerpt" => json_encode($value->excerpt),
                "doc_id"=>$value->doc_id
            ]);
        }
    }
}

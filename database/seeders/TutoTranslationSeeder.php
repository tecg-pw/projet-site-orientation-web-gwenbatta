<?php

namespace Database\Seeders;

use App\Models\TutoTranslation;
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
            TutoTranslation::create([
                "locale" => json_encode($value->locale),
                "name" => json_encode($value->name),
                "slug" => json_encode(\Str::slug($value->name)),
                "link" => json_encode($value->link),
                "excerpt" => json_encode($value->excerpt),
                "languages" => json_encode($value->languages),
                "tuto_id"=>$value->tuto_id
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\GlossaryTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlossaryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/glossarytranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            GlossaryTranslation::factory()->create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "definition" => '<p>'.$value->definition/'</p>',
                "glossary_id" => $value->glossary_id,
            ]);
        }
    }
}

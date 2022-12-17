<?php

namespace Database\Seeders;

use App\Models\LanguageTranslation;
use File;
use Illuminate\Database\Seeder;

class LanguageTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/languagetranslations.json");
        $languages = json_decode($json);

        foreach ($languages as $key => $value) {
            LanguageTranslation::factory()->create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "language_id" => $value->language_id,
            ]);
        }
    }
}

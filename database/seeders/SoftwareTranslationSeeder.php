<?php

namespace Database\Seeders;

use App\Models\LanguageTranslation;
use App\Models\SoftwareTranslation;
use File;
use Illuminate\Database\Seeder;

class SoftwareTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/softwaretranslations.json");
        $softwares = json_decode($json);

        foreach ($softwares as $key => $value) {
            SoftwareTranslation::factory()->create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "software_id" => $value->software_id,
            ]);
        }
    }
}

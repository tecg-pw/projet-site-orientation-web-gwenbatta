<?php

namespace Database\Seeders;

use App\Models\StatusTranslation;
use File;
use Illuminate\Database\Seeder;

class StatusTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/statustranslations.json");
        $status = json_decode($json);

        foreach ($status as $key => $value) {
            StatusTranslation::factory()->create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "status_id" => $value->status_id,
            ]);
        }
    }
}

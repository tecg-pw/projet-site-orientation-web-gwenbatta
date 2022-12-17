<?php

namespace Database\Seeders;

use App\Models\Language;
use File;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/languages.json");
        $docs = json_decode($json);

        foreach ($docs as $key => $value) {
            Language::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

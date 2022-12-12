<?php

namespace Database\Seeders;

use App\Models\TagTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tagtranslations.json");
        $tags = json_decode($json);

        foreach ($tags as $key => $value) {
            TagTranslation::factory()->create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name.$value->locale),
                "tag_id"=>$value->tag_id
            ]);
        }
    }
}

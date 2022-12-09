<?php

namespace Database\Seeders;

use App\Models\ToolTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tooltranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ToolTranslation::create([
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name),
                "link" => $value->link,
                "excerpt" => $value->excerpt,
                "tool_id"=>$value->tool_id
            ]);
        }
    }
}

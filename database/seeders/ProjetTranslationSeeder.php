<?php

namespace Database\Seeders;

use App\Models\ProjetTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/projecttranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ProjetTranslation::create([
                "title" => json_encode($value->title),
                "slug" => json_encode(\Str::slug($value->title.$value->project_id)),
                "locale" => json_encode($value->locale),
                "description" => json_encode($value->description),
                "link_project" => json_encode($value->link_project),
                "link_github" => json_encode($value->link_github),
                "date" => Carbon::parse($value->date)->toDateTimeString(),
                "main_picture" => json_encode($value->main_picture),
                "gallery" => json_encode($value->gallery),
                "project_id" => $value->project_id,
                "person_id" => $value->person_id,
            ]);
        }
    }
}

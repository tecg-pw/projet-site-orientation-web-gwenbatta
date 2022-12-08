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
                "title" => $value->title,
                "slug" => \Str::slug($value->title.$value->project_id),
                "locale" => $value->locale,
                "description" => $value->description,
                "link_project" => $value->link_project,
                "link_github" => $value->link_github,
                "date" => Carbon::parse($value->date)->toDateTimeString(),
                "main_picture" => $value->main_picture,
                "gallery" => $value->gallery,
                "project_id" => $value->project_id,
                "person_id" => $value->person_id,
            ]);
        }
    }
}
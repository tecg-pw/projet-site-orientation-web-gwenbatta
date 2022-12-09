<?php

namespace Database\Seeders;
use App\Models\ActualityTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActualityTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/actualitytranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ActualityTranslation::create([
                "name" => json_encode($value->name),
                "locale" => json_encode($value->locale),
                "slug" => json_encode(\Str::slug($value->name.$value->locale)),
                "excerpt" => json_encode($value->excerpt),
                "description" => json_encode($value->description),
                "lieu" => json_encode($value->lieu),
                "link" => json_encode($value->link),
                "main_picture" => json_encode($value->main_picture),
                "date" => Carbon::parse($value->date)->toDateTimeString(),
                "gallery" => json_encode($value->gallery),
                "actuality_id" => $value->actuality_id,
            ]);
        }
    }
}



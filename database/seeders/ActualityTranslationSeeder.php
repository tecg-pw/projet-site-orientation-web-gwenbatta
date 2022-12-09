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
                "name" => $value->name,
                "locale" => $value->locale,
                "slug" => \Str::slug($value->name.$value->locale),
                "excerpt" => $value->excerpt,
                "description" => $value->description,
                "lieu" => $value->lieu,
                "link" => $value->link,
                "main_picture" => $value->main_picture,
                "date" => Carbon::parse($value->date)->toDateTimeString(),
                "gallery" => $value->gallery,
                "actuality_id" => $value->actuality_id,
            ]);
        }
    }
}



<?php

namespace Database\Seeders;

use App\Models\BookTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/booktranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            BookTranslation::create([
                "name" => json_encode($value->name),
                "locale" => json_encode($value->locale),
                "slug" => json_encode(\Str::slug($value->name)),
                "excerpt" =>json_encode( $value->excerpt),
                "description" => json_encode($value->description),
                "gallery" => json_encode($value->gallery),
                "book_id" => $value->book_id,
            ]);
        }
    }
}

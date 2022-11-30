<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/offertranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('offertranslations')->insert([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" => $value->description,
                "languages" => json_encode($value->languages),
                "softwares" => json_encode($value->softwares),
                "others" => json_encode($value->others),
                "pdf" => $value->pdf,
                "locale" => $value->locale,
                "offer_id" => $value->offer_id,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/language_offer.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('language_offer')->insert([
                "offer_id" => $value->offer_id,
                "language_id" => $value->language_id
            ]);
        }
    }
}

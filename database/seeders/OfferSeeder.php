<?php

namespace Database\Seeders;

use App\Models\Offer;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/offers.json");
        $peoples = json_decode($json);

        foreach ($peoples as $key => $value) {
            Offer::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" => $value->description,
                "languages" => $value->languages,
                "softwares" => $value->softwares,
                "others" => $value->others,
                "pdf" => $value->pdf,
                "partner_id" => $value->partner_id,
            ]);
        }
    }
}

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
        $offers = json_decode($json);

        foreach ($offers as $key => $value) {
            Offer::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" => $value->description,
                "languages" => json_encode($value->languages),
                "softwares" => json_encode($value->softwares),
                "others" => json_encode($value->others),
                "pdf" => $value->pdf,
                "partner_id" => $value->partner_id,
            ]);
        }
    }
}

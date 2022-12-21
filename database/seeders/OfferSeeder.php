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
            Offer::factory()->create([
                "id" => $value->id,
                "partner_id" => $value->partner_id,
            ]);
        }
    }
}

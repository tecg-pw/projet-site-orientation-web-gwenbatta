<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/offer_software.json");
        $softwares = json_decode($json);

        foreach ($softwares as $key => $value) {
            DB::table('offer_software')->insert([
                "offer_id" => $value->offer_id,
                "software_id" => $value->software_id
            ]);
        }
    }
}

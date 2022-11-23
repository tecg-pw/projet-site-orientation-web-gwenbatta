<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/partner_person.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('partner_person')->insert([
                "partner_id" => $value->partner_id,
                "people_id" => $value->people_id
            ]);
        }
    }
}

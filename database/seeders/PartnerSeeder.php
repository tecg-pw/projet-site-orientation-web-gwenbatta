<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\People;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/partners.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            Partner::create([
                "id" => $value->id,

            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpportunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/opportunities.json");
        $tools = json_decode($json);

        foreach ($tools as $key => $value) {
            Opportunity::create([
                "id" => $value->id
            ]);
        }
    }
}

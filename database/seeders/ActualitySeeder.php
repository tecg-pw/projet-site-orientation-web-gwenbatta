<?php

namespace Database\Seeders;

use App\Models\Actuality;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/actualities.json");
        $actualities = json_decode($json);

        foreach ($actualities as $key => $value) {
            Actuality::factory()->create([
                'id'=>$value->id
            ]);
        }
    }
}

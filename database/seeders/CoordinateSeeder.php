<?php

namespace Database\Seeders;

use App\Models\Coordinate;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/coordinates.json");
        $comment = json_decode($json);

        foreach ($comment as $key => $value) {
            Coordinate::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\People;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/people.json");
        $peoples = json_decode($json);

        foreach ($peoples as $key => $value) {
            People::create([
                "id" => $value->id,
            ]);
        }

    }
}

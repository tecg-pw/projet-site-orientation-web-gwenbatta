<?php

namespace Database\Seeders;

use App\Models\Software;
use File;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/softwares.json");
        $softwares = json_decode($json);

        foreach ($softwares as $key => $value) {
            Software::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

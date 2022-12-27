<?php

namespace Database\Seeders;

use App\Models\Status;
use File;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/status.json");
        $status = json_decode($json);

        foreach ($status as $key => $value) {
            Status::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

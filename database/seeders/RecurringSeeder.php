<?php

namespace Database\Seeders;

use App\Models\Recurring;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecurringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/recurring.json");
        $recurring = json_decode($json);

        foreach ($recurring as $key => $value) {
            Recurring::factory()->create([
                "id" => $value->id,

            ]);
        }
    }
}

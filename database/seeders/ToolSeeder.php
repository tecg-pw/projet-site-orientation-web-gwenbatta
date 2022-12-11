<?php

namespace Database\Seeders;

use App\Models\Tool;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tools.json");
        $tools = json_decode($json);

        foreach ($tools as $key => $value) {
            Tool::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

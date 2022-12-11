<?php

namespace Database\Seeders;


use App\Models\Doc;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/docs.json");
        $docs = json_decode($json);

        foreach ($docs as $key => $value) {
            Doc::factory()->create([
                "id"=>$value->id
            ]);
        }
    }
}

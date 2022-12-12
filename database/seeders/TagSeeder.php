<?php

namespace Database\Seeders;

use App\Models\Tag;
use File;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tags.json");
        $tags = json_decode($json);

        foreach ($tags as $key => $value) {
            Tag::factory()->create([
                "id" => $value->id,
            ]);
        }
    }
}

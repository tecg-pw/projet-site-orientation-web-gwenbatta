<?php

namespace Database\Seeders;

use App\Models\Tuto;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tutos.json");
        $tutos = json_decode($json);

        foreach ($tutos as $key => $value) {
            Tuto::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "link" => $value->link,
                "excerpt" => $value->excerpt,
                "languages" => $value->languages
            ]);
        }
    }
}

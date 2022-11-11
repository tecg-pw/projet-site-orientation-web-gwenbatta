<?php

namespace Database\Seeders;

use App\Models\Classe;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/classes.json");
        $classes = json_decode($json);

        foreach ($classes as $key => $value) {
            Classe::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "hours" => $value->hours,
                "bac" => $value->bac,
                "description" => $value->description,
            ]);
        }
    }
}

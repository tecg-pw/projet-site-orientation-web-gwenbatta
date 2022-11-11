<?php

namespace Database\Seeders;

use App\Models\Glossary;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GlossarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/glossaries.json");
        $glossaries = json_decode($json);

        foreach ($glossaries as $key => $value) {
            Glossary::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "definition" => $value->definition,
            ]);
        }
    }
}

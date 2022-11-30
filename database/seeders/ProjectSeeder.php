<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Project;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/projects.json");
        $projects = json_decode($json);

        foreach ($projects as $key => $value) {
            Project::create([
                "id" => $value->id,
                "person_id" => $value->person_id,
            ]);
        }
    }
}

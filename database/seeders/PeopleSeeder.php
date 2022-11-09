<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/people.json");
        $people = json_decode($json);

        foreach ($people as $key => $value) {
            People::create([
                "name" => $value->name,
                "firstname" => $value->firstname,
                "slug" => \Str::slug($value->name.$value->firstname),
                "status" => $value->status,
                "photo" => $value->photo,
                "description" => $value->description,
                "link_portfolio" => $value->link_portfolio,
                "link_github" => $value->link_github,
                "linkedin" => $value->linkedin,
                "instagram" => $value->instagram,
                "mail" => $value->mail,
                "job" => $value->job,
                "gallery" => $value->gallery,
                "begin" => $value->begin,
                "end" => $value->end,
            ]);
        }

    }
}

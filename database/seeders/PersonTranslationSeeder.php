<?php

namespace Database\Seeders;

use App\Models\PersonTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/persontranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            PersonTranslation::create([
                "name" => $value->name,
                "firstname" => $value->firstname,
                "slug" => \Str::slug($value->name.$value->firstname),
                "status" => $value->status,
                "isTeacher" => $value->isTeacher,
                "avatar" => $value->avatar,
                "locale" => $value->locale,
                "description" => $value->description,
                "link_portfolio" => $value->link_portfolio,
                "link_github" => $value->link_github,
                "linkedin" => $value->linkedin,
                "instagram" => $value->instagram,
                "mail" => $value->mail,
                "job" => $value->job,
                "job_slug" => \Str::slug($value->job),
                "begin" => Carbon::parse($value->begin)->toDateTimeString(),
                "end" => $value->end,
                "people_id" => $value->people_id,
            ]);
        }
    }
}

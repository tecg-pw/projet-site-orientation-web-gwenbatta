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
                "name" => json_encode($value->name),
                "firstname" =>json_encode( $value->firstname),
                "slug" => json_encode(\Str::slug($value->name.$value->firstname)),
                "status" => json_encode($value->status),
                "isTeacher" => $value->isTeacher,
                "avatar" => json_encode($value->avatar),
                "locale" => json_encode($value->locale),
                "description" => json_encode($value->description),
                "link_portfolio" => json_encode($value->link_portfolio),
                "link_github" => json_encode($value->link_github),
                "linkedin" => json_encode($value->linkedin),
                "instagram" => json_encode($value->instagram),
                "mail" => json_encode($value->mail),
                "job" => json_encode($value->job),
                "job_slug" => json_encode(\Str::slug($value->job)),
                "begin" => Carbon::parse($value->begin)->toDateTimeString(),
                "end" => $value->end,
                "people_id" => $value->people_id,
            ]);
        }
    }
}

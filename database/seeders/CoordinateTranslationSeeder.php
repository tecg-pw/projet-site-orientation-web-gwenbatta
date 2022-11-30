<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoordinateTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get("database/save/coordinatetranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('coordinatetranslations')->insert([
                "organization" => $value->organization,
                "locale" => $value->locale,
                "employee_name" => $value->employee_name,
                "employee_firstname" => $value->employee_firstname,
                "phone" => $value->phone,
                "job" => $value->job,
                "mail" => $value->mail,
                "coordinate_id"=> $value->coordinate_id
            ]);
        }

    }
}

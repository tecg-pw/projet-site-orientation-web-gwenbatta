<?php

namespace Database\Seeders;

use App\Models\CoordinateTranslation;
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
            CoordinateTranslation::create([
                "organization" => json_encode($value->organization),
                "locale" => json_encode($value->locale),
                "employee_name" => json_encode($value->employee_name),
                "employee_firstname" => json_encode($value->employee_firstname),
                "phone" => json_encode($value->phone),
                "job" => json_encode($value->job),
                "mail" => json_encode($value->mail),
                "coordinate_id"=> $value->coordinate_id
            ]);
        }

    }
}

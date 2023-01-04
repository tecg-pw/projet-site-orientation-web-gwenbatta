<?php

namespace Database\Seeders;

use App\Models\TestimonialTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/testimonialtranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            TestimonialTranslation::create([
                "description" => '<p>'.$value->description.'</p>',
                "locale" => $value->locale,
                "testimonial_id" => $value->testimonial_id,

            ]);
        }
    }
}

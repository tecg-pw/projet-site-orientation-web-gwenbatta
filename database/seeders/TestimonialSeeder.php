<?php

namespace Database\Seeders;

use App\Models\Recurring;
use App\Models\Testimonial;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/testimonials.json");
        $recurring = json_decode($json);

        foreach ($recurring as $key => $value) {
            Testimonial::create([
                "id" => $value->id,
            ]);
        }
    }
}

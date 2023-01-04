<?php

namespace Database\Seeders;

use App\Models\OpportunityTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpportunityTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/opportunitytranslations.json");
        $opportunities = json_decode($json);

        foreach ($opportunities as $key => $value) {
            OpportunityTranslation::factory()->create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" =>'<p>'. $value->description.'</p>',
                "excerpt" => '<p>'.$value->excerpt.'</p>',
                "locale" => $value->locale,
                "opportunity_id" => $value->opportunity_id,
            ]);
        }
    }
}

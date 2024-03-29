<?php

namespace Database\Seeders;

use App\Models\RecurringTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecurringTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/recurringtranslations.json");
        $recurrings = json_decode($json);

        foreach ($recurrings as $key => $value) {
            RecurringTranslation::factory()->create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" => '<p>'.$value->description.'</p>',
                "locale" => $value->locale,
                "recurring_id" => $value->recurring_id,
            ]);
        }
    }
}

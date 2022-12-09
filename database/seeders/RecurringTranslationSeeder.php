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
            RecurringTranslation::create([
                "name" => json_encode($value->name),
                "slug" => json_encode(\Str::slug($value->name)),
                "description" => json_encode($value->description),
                "locale" => json_encode($value->locale),
                "recurring_id" => $value->recurring_id,
            ]);
        }
    }
}

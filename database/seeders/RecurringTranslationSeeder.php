<?php

namespace Database\Seeders;

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
            DB::table('recurringtranslations')->insert([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "description" => $value->description,
                "locale" => $value->locale,
                "recurring_id" => $value->recurring_id,
            ]);
        }
    }
}

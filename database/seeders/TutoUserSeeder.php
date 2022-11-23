<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/tuto_user.json");
        $users = json_decode($json);

        foreach ($users as $key => $value) {
            DB::table('tuto_user')->insert([
                "tuto_id" => $value->tuto_id,
                "user_id" => $value->user_id
            ]);
        }
    }
}

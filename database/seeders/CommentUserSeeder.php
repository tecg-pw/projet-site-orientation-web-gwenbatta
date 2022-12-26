<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/comment_user.json");
        $users = json_decode($json);

        foreach ($users as $key => $value) {
            DB::table('comment_user')->insert([
                "comment_id" => $value->comment_id,
                "user_id" => $value->user_id
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/book_classe.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            DB::table('book_course')->insert([
                "book_id" => $value->book_id,
                "course_id" => $value->course_id
            ]);
        }
    }
}

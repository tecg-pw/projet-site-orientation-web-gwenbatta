<?php

namespace Database\Seeders;

use App\Models\Book;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/books.json");
        $books = json_decode($json);

        foreach ($books as $key => $value) {
            Book::create([
                "id"=>$value->id
            ]);
        }
    }
}

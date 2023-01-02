<?php

namespace Database\Seeders;

use App\Models\ContactAgency;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/contacts.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ContactAgency::factory()->create([
                "name" => $value->name,
                "firstname" => $value->firstname,
                "email" => $value->email,
                "subject" => $value->subject,
                "message" => $value->message,
            ]);
        }
    }
}

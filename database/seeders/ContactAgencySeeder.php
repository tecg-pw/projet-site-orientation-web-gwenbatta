<?php

namespace Database\Seeders;

use App\Models\ContactAgency;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactAgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/contactagency.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ContactAgency::factory()->create([
                "name" => $value->name,
                "name_supervisor" => $value->name_supervisor,
                "email" => $value->email,
                "subject" => $value->subject,
                "message" => $value->message,
                "pdf" => $value->pdf,
                "softwares" => $value->softwares,
                "languages" => $value->languages,
            ]);
        }
    }
}

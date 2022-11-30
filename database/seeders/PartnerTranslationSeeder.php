<?php

namespace Database\Seeders;

use App\Models\PartnerTranslation;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/partnertranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            PartnerTranslation::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "mail" => $value->mail,
                "logo" => $value->logo,
                "adresse" => $value->adresse,
                "locality" => $value->locality,
                "locality_number" => $value->locality_number,
                "description" => $value->description,
                "site_link" => $value->site_link,
                "link_facebook" => $value->link_facebook,
                "link_linkedin" => $value->link_linkedin,
                "link_instagram" => $value->link_instagram,
                "members" => json_encode($value->members),
                "locale" => $value->locale,
                "partner_id" => $value->partner_id,
            ]);
        }
    }
}

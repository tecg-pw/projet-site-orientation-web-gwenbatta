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
                "name" => json_encode($value->name),
                "slug" => json_encode(\Str::slug($value->name.'_'.$value->locale)),
                "mail" => json_encode($value->mail),
                "logo" => json_encode($value->logo),
                "adresse" => json_encode($value->adresse),
                "locality" => json_encode($value->locality),
                "locality_number" => json_encode($value->locality_number),
                "description" => json_encode($value->description),
                "site_link" => json_encode($value->site_link),
                "link_facebook" => json_encode($value->link_facebook),
                "link_linkedin" => json_encode($value->link_linkedin),
                "link_instagram" => json_encode($value->link_instagram),
                "members" => json_encode($value->members),
                "locale" => json_encode($value->locale),
                "partner_id" => $value->partner_id,
            ]);
        }
    }
}

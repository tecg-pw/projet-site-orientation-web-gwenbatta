<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\People;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/partners.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            Partner::create([
                "name" => $value->name,
                "slug" => \Str::slug($value->name),
                "mail" => $value->mail,
                "logo" => $value->logo,
                "adresse" => $value->adresse,
                "locality" => $value->locality,
                "description" => $value->description,
                "site_link" => $value->site_link,
                "link_github" => $value->link_github,
                "link_linkedin" => $value->link_linkedin,
                "link_instagram" => $value->link_instagram,
                "members" => $value->members,
            ]);
        }
    }
}

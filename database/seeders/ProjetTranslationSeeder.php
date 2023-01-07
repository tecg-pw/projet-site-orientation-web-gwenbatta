<?php

namespace Database\Seeders;

use App\Models\ProjetTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/save/projecttranslations.json");
        $partners = json_decode($json);

        foreach ($partners as $key => $value) {
            ProjetTranslation::factory()->create([
                "title" => $value->title,
                "slug" => \Str::slug($value->title . $value->project_id),
                "locale" => $value->locale,
                "description" => '<p>' . $value->description . '</p>',
                "link_project" => $value->link_project,
                "link_github" => $value->link_github,
                "date" => Carbon::parse($value->date)->toDateTimeString(),
                "main_picture" => $value->main_picture,
                "pictures" => $value->pictures,
                "srcset" => $value->srcset,
                'gallery_vertical_1' => $value->gallery_vertical_1,
                'srcset_gallery_vertical_1' => $value->srcset_gallery_vertical_1,
                'gallery_vertical_2' => $value->gallery_vertical_2,
                'srcset_gallery_vertical_2' => $value->srcset_gallery_vertical_2,
                'gallery_large' => $value->gallery_large,
                'srcset_gallery_large' => $value->srcset_gallery_large,
                'gallery_small_1' => $value->gallery_small_1,
                'srcset_gallery_small_1' => $value->gallery_small_1,
                'gallery_small_2' => $value->gallery_small_2,
                'srcset_gallery_small_2' => $value->srcset_gallery_small_2,
                "project_id" => $value->project_id,

            ]);
        }
    }
}

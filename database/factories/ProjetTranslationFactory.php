<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjetTranslation>
 */
class ProjetTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->name;
        return [
            "title" => $title,
            "slug" => \Str::slug($title),
            "locale" => "fr",
            "description" => "",
            "link_project" => "",
            "link_github" => "",
            "date" => Carbon::now()->toDateTimeString(),
            "main_picture" => "",
            'pictures' => json_encode(''),
            'srcset' => json_encode(''),
            'gallery_vertical_1' => "",
            'srcset_gallery_vertical_1' => json_encode(''),
            'gallery_vertical_2' => "",
            'srcset_gallery_vertical_2' => json_encode(''),
            'gallery_large' => "",
            'srcset_gallery_large' => json_encode(''),
            'gallery_small_1' => "",
            'srcset_gallery_small_1' => json_encode(''),
            'gallery_small_2' =>"",
            'srcset_gallery_small_2' => json_encode(''),
            "project_id" => 1,
        ];
    }
}

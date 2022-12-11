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
            "gallery" => [],
            "project_id" => 1,
            "person_id" => 1,
        ];
    }
}

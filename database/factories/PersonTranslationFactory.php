<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonTranslation>
 */
class PersonTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->name,
            "firstname" => fake()->name,
            "slug" => \Str::slug(fake()->name),
            "status" => fake()->jobTitle,
            "isTeacher" => false,
            "avatar" => "",
            "locale" =>"fr",
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "link_portfolio" => "",
            "link_github" => "",
            "linkedin" => "",
            "instagram" => "",
            "mail" =>  fake()->unique()->safeEmail(),
            "job" => "",
            "job_slug" => "",
            "begin" => Carbon::now()->toDateTimeString(),
            "end" => "",
            "people_id" => 1,
        ];
    }
}

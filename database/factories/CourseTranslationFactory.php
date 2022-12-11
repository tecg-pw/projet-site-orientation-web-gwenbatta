<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseTranslation>
 */
class CourseTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name;
        return [
            "name" => $name,
            "slug" => \Str::slug($name),
            "locale" => "fr",
            "hours" => 45,
            "bac" => 1,
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "course_id"=>1
        ];
    }
}

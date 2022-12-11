<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestimonialTranslation>
 */
class TestimonialTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "locale" => "fr",
            "testimonial_id" => 1,
            "person_id" => 1,
        ];
    }
}

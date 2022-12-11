<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OpportunityTranslation>
 */
class OpportunityTranslationFactory extends Factory
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
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "excerpt" => fake()->sentence(40),
            "locale" => "fr",
            "opportunity_id" => 1,
        ];
    }
}

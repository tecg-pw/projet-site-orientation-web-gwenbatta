<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GlossaryTranslation>
 */
class GlossaryTranslationFactory extends Factory
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
            "locale" => "fr",
            "slug" => \Str::slug($name),
            "definition" => fake()->sentence(40),
            "glossary_id" => 1,
        ];
    }
}

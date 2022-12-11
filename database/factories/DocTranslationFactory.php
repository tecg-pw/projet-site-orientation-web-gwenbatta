<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocTranslation>
 */
class DocTranslationFactory extends Factory
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
            "link" => "",
            "excerpt" => fake()->sentence(40),
            "doc_id"=>1
        ];
    }
}

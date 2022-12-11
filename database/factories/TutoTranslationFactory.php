<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TutoTranslation>
 */
class TutoTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name  = fake()->name;
        return [
            "locale" => "fr",
            "name" => $name,
            "slug" => \Str::slug($name),
            "link" => "",
            "excerpt" => fake()->sentence(40),
            "languages" => "html",
            "tuto_id"=>1
        ];
    }
}

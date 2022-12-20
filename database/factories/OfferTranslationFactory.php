<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfferTranslation>
 */
class OfferTranslationFactory extends Factory
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
            "supervisor" => "",
            "description" => fake()->sentence(40),
            "softwares" => [],
            "others" => [],
            "pdf" => "",
            "locale" => "fr",
            "offer_id" => 1,

        ];
    }
}

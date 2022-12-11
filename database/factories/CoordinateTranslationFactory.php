<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoordinateTranslation>
 */
class CoordinateTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "organization" => fake()->name,
            "locale" => "fr",
            "employee_name" => fake()->name,
            "employee_firstname" => fake()->name,
            "phone" => fake()->e164PhoneNumber,
            "job" => fake()->jobTitle,
            "mail" =>fake()->unique()->safeEmail(),
            "coordinate_id"=> 1
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContactAgencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name;
        $name_supervisor = fake()->name;
        return [
            "name" => $name,
            "name_supervisor" => $name_supervisor,
            "email" => fake()->email(),
            "subject" => fake()->sentence(40),
            "message" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "softwares" => [],
            "languages" => [],
            "pdf" =>""
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "subject" => fake()->sentence(10),
            "slug" => \Str::slug(fake()->sentence(10)),
            "description" => fake()->sentence(50),
            "tag_id" => 1,
            "resolved" => false,
            "user_id" => 1,
        ];
    }
}

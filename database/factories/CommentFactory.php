<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "content" => fake()->sentence(40),
            "slug" => \Str::slug(fake()->sentence(40)),
            "like" => 1,
            "user_id" => 1,
            "subject_id" => 1,
        ];
    }
}

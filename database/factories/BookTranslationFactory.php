<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookTranslation>
 */
class BookTranslationFactory extends Factory
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
            "locale" => 'fr',
            "slug" => \Str::slug($name),
            "excerpt" => fake()->sentence(40),
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "gallery" => [],
            "book_id" => 1,
        ];
    }
}

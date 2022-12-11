<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecurringTranslation>
 */
class RecurringTranslationFactory extends Factory
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
            "locale" => "fr",
            "recurring_id" => 1,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        $firstname = fake()->name();
        return [
            'name' => $name,
            "firstname" => $firstname,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            "slug" => \Str::slug($firstname.$name),
            "avatar" => 'https://placehold.jp/276x276.png',
            'avatars' => json_encode(''),
            'srcset' => json_encode(''),
            "back_image" => 'https://placehold.jp/1920x550.png',
            "back_images" => json_encode(''),
            'srcset_back' => json_encode(''),
            "is_admin" => 0,
            "status_id"=>0
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

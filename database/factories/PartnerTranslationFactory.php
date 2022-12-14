<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PartnerTranslation>
 */
class PartnerTranslationFactory extends Factory
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
            "mail" =>  fake()->unique()->safeEmail(),
            "logo" => "",
            "supervisor" => "",
            "adresse" => "rue des Anges, 14",
            "locality" => 'Liège',
            "locality_number" => 4000,
            "description" => '<p>'.implode('</p><p>', fake()->paragraphs(12)).'</p>',
            "site_link" => "",
            "link_facebook" => "",
            "link_linkedin" => "",
            "link_instagram" => "",
            "members" => [],
            "locale" => "fr",
            "partner_id" => 1,
        ];
    }
}

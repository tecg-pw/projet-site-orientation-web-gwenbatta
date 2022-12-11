<?php

namespace Database\Factories;

use App\Models\Actuality;
use File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actuality>
 */
class ActualityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Actuality::class;

    public function definition()
    {
        return [
            "id" => 1,
        ];
    }

}

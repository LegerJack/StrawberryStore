<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "active" => fake()->boolean,
            "picture_path" => fake()->imageUrl(1920, 1080, 'berries'),
            "description" => fake()->text(),
            "sort_order" => fake()->randomDigit(),
        ];
    }
}

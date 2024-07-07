<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
            "price" => fake()->randomFloat(2, 1, 100),
            "quantity" => fake()->randomDigit(),
            "description" => fake()->text(),
        ];
    }
}

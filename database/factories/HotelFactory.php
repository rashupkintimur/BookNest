<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->words(2, true),
            "description" => fake()->words(7, true),
            "poster_url" => fake()->imageUrl(),
            "price" => fake()->numberBetween(1, 10000),
            "address" => fake()->address(),
        ];
    }
}

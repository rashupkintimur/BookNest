<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->words(3, true),
            "description" => fake()->words(5, true),
            "poster_url" => fake()->imageUrl(),
            "floor_area" => fake()->randomFloat(2, 0, 100),
            "type" => fake()->word(),
            "price" => fake()->numberBetween(1, 10000),
            "hotel_id" => fake()->numberBetween(1, 10),
        ];
    }
}

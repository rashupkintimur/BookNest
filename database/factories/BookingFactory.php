<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "room_id" => fake()->numberBetween(1, 10),
            "user_id" => fake()->numberBetween(1, 10),
            "started_at" => fake()->dateTime(),
            "finished_at" => fake()->dateTime(),
            "days" => fake()->numberBetween(1, 10),
            "price" => fake()->numberBetween(1, 1000)
        ];
    }
}

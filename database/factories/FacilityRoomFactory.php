<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FacilityRoom>
 */
class FacilityRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "facility_id" => fake()->numberBetween(1, 10),
            "room_id" => fake()->numberBetween(1, 10),
        ];
    }
}

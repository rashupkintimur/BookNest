<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            HotelSeeder::class,
            RoomSeeder::class,
            UserSeeder::class,
            BookingSeeder::class,
            FacilitySeeder::class,
            FacilityHotelSeeder::class,
            FacilityRoomSeeder::class,
        ]);
    }
}

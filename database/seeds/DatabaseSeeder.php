<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GuestsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(RoomTypeMastersTableSeeder::class);
        $this->call(ReservationRoomsTableSeeder::class);
    }
}

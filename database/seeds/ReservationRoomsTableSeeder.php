<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ReservationRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_detail_id' => 1,
            'reservation_id' => 1,
            'room_id' => 1,
            'length_of_stay' => '2泊3日',
            'accommodation_fee' => '8,000',
        ];
        DB::table('reservation_rooms')->insert($param);

        $param = [
            'reservation_detail_id' => 2,
            'reservation_id' => 2,
            'room_id' => 1,
            'length_of_stay' => '1泊2日',
            'accommodation_fee' => '5,000',
        ];
        DB::table('reservation_rooms')->insert($param);
    }
}

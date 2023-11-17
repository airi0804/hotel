<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_id' => 1,
            'guest_id' => 1,
            'number_of_peaple' => 4,
            'checkIn_date' => '2023-11-05',
            'checkOut_date' => '2023-11-07',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'reservation_id' => 2,
            'guest_id' => 2,
            'number_of_peaple' => 2,
            'checkIn_date' => '2023-11-05',
            'checkOut_date' => '2023-11-06',
        ];
        DB::table('reservations')->insert($param);
    }
}

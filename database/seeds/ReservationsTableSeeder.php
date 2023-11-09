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
            'number_peaple' => 2,
            'checkIn_date' => '2023-11-05',
            'checkOut_date' => '2023-11-10',
        ];
        DB::table('reservations')->insert($param);
    }
}

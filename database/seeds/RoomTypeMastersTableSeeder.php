<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoomTypeMastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_type_id' => 1,
            'room_name' => '洋室',
            'capacity' => 4,
        ];
        DB::table('room_type_masters')->insert($param);

        $param = [
            'room_type_id' => 2,
            'room_name' => '洋室',
            'capacity' => 2,
        ];
        DB::table('room_type_masters')->insert($param);
    }
}

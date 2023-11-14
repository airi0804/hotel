<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_id' => 1,
            'room_type_id' => 1,
            'room_number' => 1,
        ];;
        DB::table('rooms')->insert($param);
    }
}

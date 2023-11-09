<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'guest_id' => 1,
            'name' => 'taro',
            'address' => '奈良県',
            'guest_tel' => 1234567890,
        ];
        DB::table('guests')->insert($param);
    }
}

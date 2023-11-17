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
            'guest_tel' => '123-4567-890',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'guest_id' => 2,
            'name' => 'hanako',
            'address' => '東京都',
            'guest_tel' => '098-7654-321',
        ];
        DB::table('guests')->insert($param);
    }
}

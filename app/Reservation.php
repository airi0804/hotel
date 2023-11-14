<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('reservation_id');
    protected $primaryKey = 'reservation_id';

    public static $rules = array(
        // 'reservation_id' => 'required',
        'guest_id' => 'required',
        'number_of_peaple' => 'required',
        'checkIn_date' => 'required',
        'checkOut_date' => 'required'
    );

    public function guest()
    {
        // belongsTo           (主テーブル、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Guest',    'guest_id',           'guest_id');
    }
}

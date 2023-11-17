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

    // guest
    public function guest()
    {
        // belongsTo (主テーブル、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Guest', 'guest_id', 'guest_id');
    }

    // room
    public function room()
    {
        // belomgsToMany (相手のモデル、中間テーブル、中間テーブル上の自分の外部キー、中間テーブル上の相手の外部キー)
        return $this->belongsToMany('App\Room', 'reservation_rooms', 'reservation_id', 'room_id')
                    // 中間テーブルから取得したい情報
                    ->withPivot('length_of_stay', 'accommodation_fee');
    }
}

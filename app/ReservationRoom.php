<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationRoom extends Model
{
    protected $guarded = array('reservation_detail_id');
    protected $primaryKey = 'reservation_detail_id';

    public static $rules = array(
        'reservation_id' => 'required',
        'room_id' => 'required',
        'length_of_stay' => 'required',
        'accommodation_fee' => 'required'
    );


    // reservation
    public function reservation()
    {
        return $this->belongsTo('App\Reservation', 'reservation_id', 'reservation_id');
    }

    // room
    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id', 'room_id');
    }
}

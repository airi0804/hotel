<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'reservation_id' => 'required',
        'guest_id' => 'required',
        'number_peaple' => 'required',
        'checkIn_date' => 'required',
        'checkOut_date' => 'required'
    );

    // public function getData()
    // {
    //     return $this->id . ': ' . $this->name;
    // }

    // public function guest()
    // {
    //     return $this->belongsTo('App/Guest');
    // }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('room_id');
    protected $primaryKey = 'room_id';

    public static $rules = array(
        // 'room_id' => 'required',
        'room_type_id' => 'required',
        'room_number' => 'required'
    );
}

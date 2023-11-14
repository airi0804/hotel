<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypeMaster extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'room_type_id' => 'required',
        'room_name' => 'required',
        'capacity' => 'required'
    );

    // public function getData()
    // {
    //     return $this->id . ': ' . $this->title;
    // }
}

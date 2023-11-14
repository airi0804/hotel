<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array(
        // 'guest_id' => 'required',
        'name' => 'required',
        'address' => 'required',
        'guest_tel' => 'required'
    );

    protected $primaryKey = 'guest_id';

    // public function getData()
    // {
    //     return $this->id . ': ' . $this->name;
    // }
}

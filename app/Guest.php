<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /* データを追加するためにcreateメソッドを使用するときに必要。
    「$guarded」,「$fillable」どちらかだけで良い */
    // 書き換えられないように
    protected $guarded = array('guest_id');
    // 書き換えて良いように
    // protected $fillable = ['name', 'address', 'guest_tel'];

    protected $primaryKey = 'guest_id';

    public static $rules = array(
        // 'guest_id' => 'required',
        'name' => 'required',
        'address' => 'required',
        'guest_tel' => 'required'
    );
}

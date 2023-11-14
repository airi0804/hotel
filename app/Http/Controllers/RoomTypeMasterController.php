<?php

namespace App\Http\Controllers;

use App\RoomTypeMaster;
use Illuminate\Http\Request;

class RoomTypeMasterController extends Controller
{
    public function index(Request $request)
    {
        $items = RoomTypeMaster::all();
        return view('room_type_master.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('room_type_master.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, RoomTypeMaster::$rules);
        $room_type_master = new RoomTypeMaster;
        $form = $request->all();
        unset($form['_token']);
        $room_type_master->fill($form)->save();
        return redirect('/room_type_master');
    }
}

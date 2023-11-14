<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $items = Room::all();
        return view('room.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('room.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Room::$rules);
        $room = new Room;
        $form = $request->all();
        unset($form['_token']);
        $room->fill($form)->save();
        return redirect('/room');
    }
}

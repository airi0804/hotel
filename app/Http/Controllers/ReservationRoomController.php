<?php

namespace App\Http\Controllers;

use App\ReservationRoom;
use Illuminate\Http\Request;

class ReservationRoomController extends Controller
{
    public function index(Request $request)
    {
        $items = ReservationRoom::all();
        return view('reservation_room.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('reservation_room.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, ReservationRoom::$rules);
        $reservation_room = new ReservationRoom;
        $form = $request->all();
        unset($form['_token']);
        $reservation_room->fill($form)->save();
        return redirect('/reservation_room');
    }
}

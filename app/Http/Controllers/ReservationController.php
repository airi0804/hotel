<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation::all();
        return view('reservation.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('reservation.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Reservation::$rules);
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();
        return redirect('/reservation');
    }

    public function edit(Request $request)
    {
        $reservation = Reservation::find($request->reservation_id);
        return view('reservation.edit', ['form' => $reservation]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Reservation::$rules);
        $reservation =Reservation::find($request->reservation_id);
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();
        return redirect('/reservation');
    }

    public function delete(Request $request)
    {
        $reservation = Reservation::find($request->reservation_id);
        return view('reservation.del', ['form' => $reservation]);
    }

    public function remove(Request $request)
    {
        Reservation::find($request->reservation_id)->delete();
        return redirect('/reservation');
    }
}

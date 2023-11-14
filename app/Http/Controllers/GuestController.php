<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $items = Guest::all();
        return view('guest.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('guest.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Guest::$rules);
        $guest = new Guest;
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/guest');
    }

    public function edit(Request $request)
    {
        $guest = Guest::find($request->id);
        return view('guest.edit', ['form' => $guest]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Guest::$rules);
        $guest = Guest::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/guest');
    }

    public function delete(Request $request)
    {
        $guest = Guest::find($request->id);
        return view('guest.del', ['form' => $guest]);
    }

    public function remove(Request $request)
    {
        Guest::find($request->id)->delete();
        return redirect('/guest');
    }
}

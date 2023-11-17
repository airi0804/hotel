<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// guest
Route::get('guest', 'GuestController@index');

Route::get('guest/add', 'GuestController@add');
Route::post('guest/add', 'GuestController@create');

Route::get('guest/edit', 'GuestController@edit');
Route::post('guest/edit', 'GuestController@update');

Route::get('guest/del', 'GuestController@delete');
Route::post('guest/del', 'GuestController@remove');


// reservation
Route::get('reservation', 'ReservationController@index');

Route::get('reservation/add', 'ReservationController@add');
Route::post('reservation/add', 'ReservationController@create');

Route::get('reservation/edit', 'ReservationController@edit');
Route::post('reservation/edit', 'ReservationController@update');

Route::get('reservation/del', 'ReservationController@delete');
Route::post('reservation/del', 'ReservationController@remove');


// room
Route::get('room', 'RoomController@index');


// room_type_master
Route::get('room_type_master', 'RoomTypeMasterController@index');


// reservation_detail
// Route::get('reservation_detail', 'ReservationDetailController@index');

// Route::get('reservation_detail/add', 'ReservationDetailController@add');
// Route::post('reservation_detail/add', 'ReservationDetailController@create');

// reservation_room
Route::get('reservation_room', 'ReservationRoomController@index');

Route::get('reservation_room/add', 'ReservationRoomController@add');
Route::post('reservation_room/add', 'ReservationRoomController@create');

@extends('layouts.hotel')

@section('title', 'ReservationRoom.index')

@section('body')
    {{-- @parent --}}
    <h2>予約明細ページ</h2>
    <table>
        <tr>
            <th>予約明細ID</th>
            <th>予約ID</th>
            <th>部屋ID</th>
            <th>宿泊日</th>
            <th>宿泊料</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->reservation_detail_id }}</td>
                <td>{{ $item->reservation->reservation_id }}</td>
                <td>{{ $item->room->room_id }}</td>
                <td>{{ $item->length_of_stay }}</td>
                <td>{{ $item->accommodation_fee }}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

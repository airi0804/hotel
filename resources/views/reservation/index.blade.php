@extends('layouts.hotel')

@section('title', 'Reservation.index')

@section('body')
    {{-- @parent --}}
    <h2>予約情報ページ</h2>
    <table>
        <tr>
            <th>予約ID</th>
            <th>利用者ID</th>
            <th>氏名</th>
            <th>住所</th>
            <th>電話番号</th>
            <th>部屋番号</th>
            <th>人数</th>
            <th>チェックイン日</th>
            <th>チェックアウト日</th>
            <th>宿泊日</th>
            <th>料金</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->reservation_id }}</td>
                <td>{{ $item->guest->guest_id }}</td>
                <td>{{ $item->guest->name }}&nbsp;様</td>
                <td>{{ $item->guest->address }}</td>
                <td>{{ $item->guest->guest_tel }}</td>
                <td>{{ $item->room->first()->room_number }}&nbsp;号室</td>
                <td>{{ $item->number_of_peaple }}&nbsp;名</td>
                <td>{{ $item->checkIn_date }}</td>
                <td>{{ $item->checkOut_date }}</td>
                <td>{{ $item->room->first()->pivot->length_of_stay }}</td>
                <td>{{ $item->room->first()->pivot->accommodation_fee }}&nbsp;円</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

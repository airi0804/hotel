@extends('layouts.hotel')

@section('title', 'Reservation.index')

<style>
    table {
        width: 80%;
        border: solid 3px rgb(202, 219, 212);
        /* 線の間に隙間を作らない */
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px 5px;
        border: dashed 2px rgb(122, 161, 111);
        text-align: center;
    }

    table tr:nth-child(odd) {
        background-color: rgb(240, 240, 232);
    }

    input[type="submit"] {
        margin: 30px 0 0 350px;
        width: 100px;
        padding: 15px 0;
    }
</style>

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
            <th>人数</th>
            <th>チェックイン日</th>
            <th>チェックアウト日</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->reservation_id }}</td>
                <td>{{ $item->guest_id }}</td>
                <td>{{ $item->guest->name }}様</td>
                <td>{{ $item->guest->address }}</td>
                <td>{{ $item->guest->guest_tel }}</td>
                <td>{{ $item->number_peaple }}人</td>
                <td>{{ $item->checkIn_date }}</td>
                <td>{{ $item->checkOut_date }}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

@extends('layouts.hotel')

@section('title', 'Reservation.Delete')

<style>
    table {
        width: 80%;
        border: solid 3px rgb(202, 219, 212);
        /* 線の間に隙間を作らない */
        border-collapse: collapse;
    }

    table th, table td {
        padding: 10px 5px;
        border: dashed 2px rgb(122, 161, 111);
        text-align: center;
    }

    input[type="submit"] {
        margin: 30px 0 0 350px;
        width: 100px;
        padding: 15px 0;
    }
</style>

@section('body')
    {{-- @parent --}}
    <h2>予約情報削除ページ</h2>
    <form action="/reservation/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>予約ID:</th>
            <td>{{$form->reservation_id}}</td>
        </tr>
        <tr>
            <th>利用者ID:</th>
            <td>{{$form->guest_id}}</td>
        </tr>
        <tr>
            <th>人数:</th>
            <td>{{$form->number_peaple}}人</td>
        </tr>
        <tr>
            <th>チェックイン日:</th>
            <td>{{$form->checkIn_date}}</td>
        </tr>
        <tr>
            <th>チェックアウト日:</th>
            <td>{{$form->checkOut_date}}</td>
        </tr>
    </table>
    <tr>
        <th></th>
        <td><input type="submit" value="削除"></td>
    </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

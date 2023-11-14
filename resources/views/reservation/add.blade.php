@extends('layouts.hotel')

@section('title', 'Reservation.Add')

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
    <h2>予約ページ</h2>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/reservation/add" method="post">
        <table>
            @csrf
            {{-- <tr>
                <th>予約ID:</th>
                <td><input type="number" name="reservation_id" value="{{old('reservation_id')}}"></td>
            </tr> --}}
            <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{old('guest_id')}}"></td>
            </tr>
            <tr>
                <th>人数:</th>
                <td><input type="number" name="number_peaple" value="{{old('number_peaple')}}">人</td>
            </tr>
            <tr>
                <th>チェックイン日:</th>
                <td><input type="date" name="checkIn_date" value="{{old('checkIn_date')}}"></td>
            </tr>
            <tr>
                <th>チェックアウト日:</th>
                <td><input type="date" name="checkOut_date" value="{{old('checkOut_date')}}"></td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input type="submit" value="予約"></td>
        </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

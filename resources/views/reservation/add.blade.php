@extends('layouts.hotel')

@section('title', 'Reservation.Add')

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
                <th>利用者ID&nbsp;:</th>
                <td><input type="number" name="guest_id" value="{{ old('guest_id') }}"></td>
            </tr>
            <tr>
                <th>人数&nbsp;:</th>
                <td><input type="number" name="number_of_peaple" value="{{ old('number_of_peaple') }}">&nbsp;名</td>
            </tr>
            <tr>
                <th>チェックイン日&nbsp;:</th>
                <td><input type="date" name="checkIn_date" value="{{ old('checkIn_date') }}"></td>
            </tr>
            <tr>
                <th>チェックアウト日&nbsp;:</th>
                <td><input type="date" name="checkOut_date" value="{{ old('checkOut_date') }}"></td>
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

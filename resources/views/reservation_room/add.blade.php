@extends('layouts.hotel')

@section('title', 'ReservationRoom.Add')

@section('body')
    {{-- @parent --}}
    <h2>予約明細追加ページ</h2>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/reservation_detail/add" method="post">
        <table>
            @csrf
            <tr>
                <label for="reservation_id">
                    <th>予約ID:</th>
                </label>
                <td><input type="number" name="reservation_id" value="{{ old('reservation_id') }}"></td>
            </tr>
            <tr>
                <label for="room_id">
                    <th>部屋ID:</th>
                </label>
                <td><input type="number" name="room_id" value="{{ old('room_id') }}"></td>
            </tr>
            <tr>
                <label for="length_of_stay">
                    <th>宿泊日:</th>
                </label>
                <td><input type="number" name="length_of_stay" value="{{ old('length_of_stay') }}"></td>
            </tr>
            <tr>
                <label for="accommodation_fee">
                    <th>宿泊料:</th>
                </label>
                <td><input type="number" name="accommodation_fee" value="{{ old('accommodation_fee') }}"></td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input type="submit" value="登録"></td>
        </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

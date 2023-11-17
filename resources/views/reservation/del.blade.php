@extends('layouts.hotel')

@section('title', 'Reservation.Delete')

@section('body')
    {{-- @parent --}}
    <h2>予約情報削除ページ</h2>
    <form action="/reservation/del" method="post">
        <table>
            @csrf
            <input type="hidden" name="reservation_id" value="{{ $form->reservation_id }}">
            <tr>
                <th>予約ID:</th>
                <td>{{ $form->reservation_id }}</td>
            </tr>
            <tr>
                <th>利用者ID:</th>
                <td>{{ $form->guest_id }}</td>
            </tr>
            <tr>
                <th>人数:</th>
                <td>{{ $form->number_of_peaple }}名</td>
            </tr>
            <tr>
                <th>チェックイン日:</th>
                <td>{{ $form->checkIn_date }}</td>
            </tr>
            <tr>
                <th>チェックアウト日:</th>
                <td>{{ $form->checkOut_date }}</td>
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

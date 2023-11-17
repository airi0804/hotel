@extends('layouts.hotel')

@section('title', 'ReservationRoom.Delete')

@section('body')
    {{-- @parent --}}
    <h2>利用者情報削除ページ</h2>
    <form action="/guest/del" method="post">
        <table>
            @csrf
            <input type="hidden" name="guest_id" value="{{ $form->guest_id }}">
            <tr>
                <th>利用者ID:</th>
                <td>{{ $form->guest_id }}</td>
            </tr>
            <tr>
                <th>氏名:</th>
                <td>{{ $form->name }}様</td>
            </tr>
            <tr>
                <th>住所:</th>
                <td>{{ $form->address }}</td>
            </tr>
            <tr>
                <th>電話番号:</th>
                <td>{{ $form->guest_tel }}</td>
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

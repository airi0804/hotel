@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    {{-- @parent --}}
    予約情報削除ページ
@endsection

@section('content')
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
            <td>{{$form->number_peaple}}</td>
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
        <td><input type="submit" value="send"></td>
    </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

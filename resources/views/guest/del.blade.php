@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    {{-- @parent --}}
    利用者情報削除ページ
@endsection

@section('content')
    <form action="/guest/add" method="post">
    <table>
        @csrf
        <tr>
            <th>guest id:</th>
            <td><input type="number" name="guest_id"></td>
        </tr>
        <tr>
            <th>name:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>address:</th>
            <td><input type="number" name="address"></td>
        </tr>
        <tr>
            <th>guest tel:</th>
            <td><input type="number" name="guest_tel"></td>
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

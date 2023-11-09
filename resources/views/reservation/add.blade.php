@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    {{-- @parent --}}
    利用者追加ページ
@endsection

@section('content')
    <form action="/guest/add" method="post">
    <table>
        @csrf
        <tr>
            <th>利用者ID:</th>
            <td><input type="number" name="guest_id"></td>
        </tr>
        <tr>
            <th>氏名:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>住所:</th>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <th>電話番号:</th>
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

@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    {{-- @parent --}}
    利用者情報削除ページ
@endsection

@section('content')
    <form action="/guest/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>利用者ID:</th>
            <td>{{$form->guest_id}}</td>
        </tr>
        <tr>
            <th>氏名:</th>
            <td>{{$form->name}}</td>
        </tr>
        <tr>
            <th>住所:</th>
            <td>{{$form->address}}</td>
        </tr>
        <tr>
            <th>電話番号:</th>
            <td>{{$form->guest_tel}}</td>
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

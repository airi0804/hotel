@extends('layouts.hotel')

@section('title', 'Guest.Delete')

<style>
    
    table {
        width: 80%;
        border: solid 3px rgb(202, 219, 212);
        /* 線の間に隙間を作らない */
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px 5px;
        border: dashed 2px rgb(122, 161, 111);
        text-align: center;
    }
    
    table tr:nth-child(odd) {
        background-color: rgb(240, 240, 232);
    }

    input[type="submit"] {
        margin: 30px 0 0 350px;
        width: 100px;
        padding: 15px 0;
    }
</style>

@section('body')
    {{-- @parent --}}
    <h2>利用者情報削除ページ</h2>
    <form action="/guest/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="guest_id" value="{{$form->guest_id}}">
        <tr>
            <th>利用者ID:</th>
            <td>{{$form->guest_id}}</td>
        </tr>
        <tr>
            <th>氏名:</th>
            <td>{{$form->name}}様</td>
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
        <td><input type="submit" value="削除"></td>
    </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

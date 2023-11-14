@extends('layouts.hotel')

@section('title', 'Guest.index')

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
</style>

@section('body')
    {{-- @parent --}}
    <h2>利用者情報ページ</h2>
    <table>
        <tr>
            <th>利用者ID</th>
            <th>氏名</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->guest_id }}</td>
                <td>{{ $item->name }}様</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->guest_tel }}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

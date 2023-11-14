@extends('layouts.hotel')

@section('title', 'Room.index')

<style>
    table {
        width: 80%;
        border: solid 3px rgb(202, 219, 212);
        /* 線の間に隙間を作らない */
        border-collapse: collapse;
    }

    table th, table td {
        padding: 10px 5px;
        border: dashed 2px rgb(122, 161, 111);
        text-align: center;
    }
</style>

@section('body')
    {{-- @parent --}}
    <h2>部屋情報ページ</h2>
    <table>
        <tr>
            <th>部屋ID</th>
            <th>部屋種別ID</th>
            <th>部屋番号</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->room_type_id }}</td>
                <td>{{ $item->room_number }}号室</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

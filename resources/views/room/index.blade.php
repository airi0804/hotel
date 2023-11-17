@extends('layouts.hotel')

@section('title', 'Room.index')

@section('body')
    {{-- @parent --}}
    <h2>部屋情報ページ</h2>
    <table>
        <tr>
            <th>部屋ID</th>
            <th>部屋種別ID</th>
            <th>名称</th>
            <th>宿泊可能人数</th>
            <th>部屋番号</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->room_type_master->room_type_id }}</td>
                <td>{{ $item->room_type_master->room_name }}</td>
                <td>{{ $item->room_type_master->capacity }}&nbsp;人</td>
                <td>{{ $item->room_number }}&nbsp;号室</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

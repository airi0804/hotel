@extends('layouts.hotel')

@section('title', 'RoomTypeMaster.index')

@section('body')
    {{-- @parent --}}
    <h2>部屋種別ページ</h2>
    <table>
        <tr>
            <th>部屋種別ID</th>
            <th>名称</th>
            <th>宿泊可能人数</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->room_type_id }}</td>
                <td>{{ $item->room_name }}</td>
                <td>{{ $item->capacity }}&nbsp;人</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

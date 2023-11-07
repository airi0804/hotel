@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    {{-- @parent --}}
    利用者情報ページ
@endsection

@section('content')
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
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->guest_tel }}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

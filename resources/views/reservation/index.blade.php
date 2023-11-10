@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    {{-- @parent --}}
    予約情報ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>予約ID</th>
            <th>利用者ID</th>
            <th>人数</th>
            <th>チェックイン日</th>
            <th>チェックアウト日</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->reservation_id }}</td>
                <td>{{ $item->guest_id }}</td>
                <td>{{ $item->number_peaple }}</td>
                <td>{{ $item->checkIn_date }}</td>
                <td>{{ $item->checkOut_date }}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

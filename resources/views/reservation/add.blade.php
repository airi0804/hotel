@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    {{-- @parent --}}
    予約追加ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/reservation/add" method="post">
        <table>
            @csrf
            <tr>
                <th>予約ID:</th>
                <td><input type="number" name="reservation_id" value="{{old('reservation_id')}}"></td>
            </tr>
            <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{old('guest_id')}}"></td>
            </tr>
            <tr>
                <th>人数:</th>
                <td><input type="number" name="number_peaple" value="{{old('number_peaple')}}"></td>
            </tr>
            <tr>
                <th>チェックイン日:</th>
                <td><input type="date" name="checkIn_date" value="{{old('checkIn_date')}}"></td>
            </tr>
            <tr>
                <th>チェックアウト日:</th>
                <td><input type="date" name="checkOut_date" value="{{old('checkOut_date')}}"></td>
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

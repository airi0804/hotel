@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    {{-- @parent --}}
    予約情報編集ページ
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
    <form action="/reservation/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>予約ID:</th>
                <td><input type="number" name="reservation_id" value="{{$form->reservation_id}}"></td>
            </tr>
            <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{$form->guest_id}}"></td>
            </tr>
            <tr>
                <th>人数:</th>
                <td><input type="number" name="number_peaple" value="{{$form->number_peaple}}"></td>
            </tr>
            <tr>
                <th>チェックイン日:</th>
                <td><input type="date" name="checkIn_date" value="{{$form->checkIn_date}}"></td>
            </tr>
            <tr>
                <th>チェックアウト日:</th>
                <td><input type="date" name="checkOut_date" value="{{$form->checkOut_date}}"></td>
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

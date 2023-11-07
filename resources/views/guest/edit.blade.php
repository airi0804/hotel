@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    {{-- @parent --}}
    利用者情報編集ページ
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
    <form action="/guest/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>guest id:</th>
                <td><input type="number" name="guest_id" value="{{$form->guest_id}}"></td>
            </tr>
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" value="{{$form->name}}"></td>
            </tr>
            <tr>
                <th>address:</th>
                <td><input type="number" name="address" value="{{$form->address}}"></td>
            </tr>
            <tr>
                <th>guest tel:</th>
                <td><input type="number" name="guest_tel" value="{{$form->guest_tel}}"></td>
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

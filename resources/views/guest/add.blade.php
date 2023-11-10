@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    {{-- @parent --}}
    利用者追加ページ
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
    <form action="/guest/add" method="post">
        <table>
            @csrf
            <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{old('guest_id')}}"></td>
            </tr>
            <tr>
                <th>氏名:</th>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>
            <tr>
                <th>住所:</th>
                <td><input type="text" name="address" value="{{old('address')}}"></td>
            </tr>
            <tr>
                <th>電話番号:</th>
                <td><input type="number" name="guest_tel" value="{{old('guest_tel')}}"></td>
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

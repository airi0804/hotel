@extends('layouts.hotel')

@section('title', 'Guest.Add')

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

    input[type="submit"] {
        margin: 30px 0 0 350px;
        width: 100px;
        padding: 15px 0;
    }
</style>

@section('body')
    {{-- @parent --}}
    <h2>利用者追加ページ</h2>
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
            {{-- <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{old('guest_id')}}"></td>
            </tr> --}}
            <tr>
                <label for="name"><th>氏名:</th></label>
                <td><input type="text" name="name" value="{{old('name')}}">様</td>
            </tr>
            <tr>
                <label for="address"><th>住所:</th></label>
                <td><input type="text" name="address" value="{{old('address')}}"></td>
            </tr>
            <tr>
                <label for="guest_tel"><th>電話番号:</th></label>
                <td><input type="number" name="guest_tel" value="{{old('guest_tel')}}"></td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input type="submit" value="登録"></td>
        </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

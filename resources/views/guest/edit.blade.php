@extends('layouts.hotel')

@section('title', 'Guest.Edit')

<style>
    table {
        width: 80%;
        border: solid 3px rgb(202, 219, 212);
        /* 線の間に隙間を作らない */
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px 5px;
        border: dashed 2px rgb(122, 161, 111);
        text-align: center;
    }

    table td {
        font-weight: 700;
    }

    table tr:nth-child(odd) {
        background-color: rgb(240, 240, 232);
    }

    input[type="submit"] {
        margin: 30px 0 0 350px;
        width: 100px;
        padding: 15px 0;
    }
</style>

@section('body')
    {{-- @parent --}}
    <h2>利用者情報編集ページ</h2>
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
            {{-- <tr>
                <th>利用者ID:</th>
                <td><input type="number" name="guest_id" value="{{ $form->guest_id }}"></td>
            </tr> --}}
            {{-- 利用者IDを変更できないようにしておく --}}
            <tr>
                <th>利用者ID:</th>
                <td>{{ $form->id }}</td>
            </tr>
            <tr>
                <th>氏名:</th>
                <td><input type="text" name="name" value="{{ $form->name }}">様</td>
            </tr>
            <tr>
                <th>住所:</th>
                <td><input type="text" name="address" value="{{ $form->address }}"></td>
            </tr>
            <tr>
                <th>電話番号:</th>
                <td><input type="number" name="guest_tel" value="{{ $form->guest_tel }}"></td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input type="submit" value="変更"></td>
        </tr>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection

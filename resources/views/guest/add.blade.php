@extends('layouts.hotel')

@section('title', 'Guest.Add')

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
                <label for="name">
                    <th>氏名&nbsp;:</th>
                <td><input class="input" type="text" name="name" value="{{ old('name') }}">&emsp;様</td>
            </label>
            </tr>
            <tr>
                <label for="address">
                    <th>住所&nbsp;:</th>
                </label>
                <td><input class="input" type="text" name="address" value="{{ old('address') }}"></td>
            </tr>
            <tr>
                <label for="guest_tel">
                    <th>電話番号&nbsp;:</th>
                </label>
                <td><input class="input" type="tel" name="guest_tel" value="{{ old('guest_tel') }}"></td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input class="btn btn-outline-dark" type="submit" value="登録"></td>
        </tr>
    </form>
@endsection


@section('footer')
    copyright 2020 tuyano
@endsection

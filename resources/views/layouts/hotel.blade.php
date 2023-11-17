<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    {{-- BootStrapのデフォルト設定を読み込む --}}
    {{-- hotel/public/css/app.css の場所にデフォルト設定がある --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotel</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        .tab {
            display: flex;
        }

        a {
            margin-left: 5px;
        }

        table {
            width: 100%;
            /* border: solid 3px rgba(165, 42, 42, 0.753); */
            /* 線の間に隙間を作らない */
            border-collapse: collapse;
            table-layout: auto;
        }

        table th,
        table td {
            padding: 10px 5px;
            /* border: solid 2px ; */
            text-align: center;
        }

        table th {
            border: solid 3px;
        }

        table td {
            font-weight: 700;
            border: solid 2px;
        }

        table tr th {
            background-color: ;
        }

        table tr:nth-child(even) {
            background-color: ;
        }

        table tr:nth-child(odd) {
            background-color: ;
        }

        .input {
            /* width: 100%; */
            padding: 2px 8px;
            font-size: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin: 25px 0 0 350px;
            width: 110px;
            padding: 10px 0;
            font-size: 15px;
            background-color: ;
            border-radius: 7px;
            border: solid 3px;
        }
    </style>
</head>
<body>
    <header>
        <h1></h1>
        <nav>
            <ul class="tab">
                <a href="/guest"><button type="button" class="btn btn-outline-dark">利用者情報</button></a>
                <a href="/reservation"><button type="button" class="btn btn-outline-dark">予約情報</button></a>
                <a href="/room"><button type="button" class="btn btn-outline-dark">部屋情報</button></a>
                <a href="/room_type_master"><button type="button" class="btn btn-outline-dark">部屋種別情報</button></a>
                {{-- <li><a href="/reservation_room">予約明細</a></li> --}}
            </ul>
            <ul class="tab">
                <a href="/guest/add"><button type="button" class="btn btn-outline-dark">利用者登録</button></a>
                <a href="/reservation/add"><button type="button" class="btn btn-outline-dark">予約</button></a>
            </ul>
        </nav>
    </header>
    <body>
        @yield('body')
    </body>
</body>
</html>
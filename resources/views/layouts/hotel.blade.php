<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotel</title>
    <style>
        .tab {
            display: flex;
        }

        li {
            margin-left: 35px;
        }
    </style>
</head>
<body>
    <header>
        <h1></h1>
        <nav>
            <ul class="tab">
                <li><a href="/guest">利用者情報</a></li>
                <li><a href="/reservation">予約情報</a></li>
                <li><a href="/room">部屋情報</a></li>
                <li><a href="/room_type_master">部屋種別情報</a></li>
            </ul>
            <ul class="tab">
                <li><a href="/guest/add">利用者登録</a></li>
                <li><a href="/reservation/add">予約</a></li>
            </ul>
        </nav>
    </header>
    <body>
        @yield('body')
    </body>
</body>
</html>
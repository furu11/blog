<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プロファイル画面</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class= "login_box">
    <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。</h2>

    <form action="{{route('views.index')}}" method="post">
        @csrf
        <button>投稿画面へ</button>
    </form>
    </div>
</body>
</html>

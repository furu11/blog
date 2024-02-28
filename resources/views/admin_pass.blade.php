

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>管理者パスワード</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
<meta http-equiv="Expires" content="Sat, 27 Mar 2023 00:00:00 GMT">
<meta http-equiv="Pragma" content="cache">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>




@extends('layouts.app')

@section('content')
  
@endsection


</head>


<body>
    <h1>管理者パスワード</h1>
    <div class= "login_box">
    <form action="{{ route('admin') }}" method="post">
        @csrf
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">送信</button>

       
    </form>
</div>
</body>
</html>

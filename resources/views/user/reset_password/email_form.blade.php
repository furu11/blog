

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>パスワード再設定</title>
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


<div class= "login_box">
        <h1>パスワード再設定メール送信フォーム</h1>
        <form method="POST" action="{{ route('password_reset.email.send') }}">
            @csrf
            <div>
                <label for="email">メールアドレス</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button>再設定用メールを送信</button>
        </form>

        <a href="login">戻る</a>
    </div>

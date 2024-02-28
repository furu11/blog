<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>削除画面</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
<meta http-equiv="Expires" content="Sat, 27 Mar 2023 00:00:00 GMT">
<meta http-equiv="Pragma" content="cache">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</head>

@extends('layouts.app')
@section('content')
    <div class="title-area">
        <h2>削除完了</h2>
    </div>
    <div class="login_box">
        <p>削除しました。</p>
        <p><a href="{{ route('views.index') }}">メイン画面に戻ります。</a></p>
    </div>

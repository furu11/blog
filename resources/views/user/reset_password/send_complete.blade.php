<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>リセット完了画面</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


@extends('layouts.app')

@section('content')
  
@endsection

   


    <div class= "login_box">
        <h1>パスワードリセットメールを送信しました。</h1>

        <a href="{{ route('login') }}">TOPへ</a>
    </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> パスワード再設定完了</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

@extends('layouts.user')

@section('page-title')
    パスワード再設定完了
@endsection

@section('page-content')
    <div>
        <h1>パスワードリセットが完了しました</h1>

        <a href="{{ route('login') }}">TOPへ</a>
    </div>
@endsection
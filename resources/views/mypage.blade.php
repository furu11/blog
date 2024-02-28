<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>投稿サイト</title>
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

<!-- <h1>いいね！一覧</h1>

<table border="1" class="db_table">
    <tr>
        <th class="id">ID</th>
        <th class="name">名前</th>
        <th class="age">年代</th>
        <th class="time_start">開始時間</th>
        <th class="time_end">終了時間</th>
        <th class="location">場所</th>
        <th class="body">募集要項</th>
        <th class="created_at">送信日時</th>
    </tr>
    @foreach($likedPosts as $likedPost)
    <tr> <!-- 修正点：foreachループ内に<tr>要素を追加 -->
        <td>{{ $likedPost->id }}</td>
        <td>{{ $likedPost->name }}</td>
        <td>{{ $likedPost->age }}</td>
        <td>{{ $likedPost->time_start }}</td>
        <td>{{ $likedPost->time_end }}</td>
        <td>{{ $likedPost->location }}</td>
        <td>{{ $likedPost->body }}</td>
        <td>{{ $likedPost->created_at }}</td>
    </tr>
    @endforeach
</table> -->





<h1>投稿一覧</h1>


<table border="1" class="db_table">
    <tr>
        <th class="id">ID</th>
        <th class="name">名前</th>
        <th class="age">年代</th>
        <th class="time_start">開始時間</th>
        <th class="time_end">終了時間</th>
        <th class="location">場所</th>
        <th class="body">募集要項</th>
        <th class="created_at">送信日時</th>
        <th>編集</th>
        <th>削除</th>
    </tr>

    @if ($contacts)
    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->id  }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->age  }}</td>
            <td>{{ $contact->time_start  }}</td>
            <td>{{ $contact->time_end  }}</td>
            <td>{{ $contact->location}}</td>
            <td>{{ $contact->body}}</td>
            <td>{{ $contact->created_at }}</td>
         
            <td><a href="{{ route('admin.post.edit', ['id' => $contact->id]) }}">編集</a></td>


            <td><a href="{{ route('admin.post.delete', ['id' => $contact->id]) }}">削除</a></td>
         
        </tr>

        
    @endforeach
    @endif
</table>


    <div class="mypage">
            <input type="button" value="戻る" onClick="history.back();">
    </div>


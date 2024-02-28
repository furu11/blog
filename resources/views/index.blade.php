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
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/106bdd6bb5.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

 

  @extends('layouts.app')
</head>

<body id="app">
  <div class="alert">
    仲間募集！
  </div>
  <header>
    @include('header')
  </header>

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
      <th class="like">いいね</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->age }}</td>
      <td>{{ $contact->time_start }}</td>
      <td>{{ $contact->time_end }}</td>
      <td>{{ $contact->location }}</td>
      <td>{{ $contact->body }}</td>
      <td>{{ $contact->created_at }}</td>
    <td>
    <button onclick="toggleLike({{ $contact->id }})" class="like-button">いいね</button>

<span class="likes">
    <i class="fa-regular fa-heart like-toggle" data-like-id="{{ $contact->id }}"></i>
    <span class="like-counter">{{ $contact->likes_count }}</span>
</span>

 
 


</td>




    </tr>
    @endforeach
  </table>



</body>

</html>


<script>

function like(postId) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/like',
        method: 'POST',
        data: {
            'like_id': postId
        },
    }).done(function(data, status, xhr) {
        console.log(data);
        $('.like-toggle[data-like-id="' + postId + '"]').addClass('fas').removeClass('far');
        // アイコンのクラスを切り替えて、空のハートから塗りつぶしのハートに変更
    }).fail(function(xhr, status, error) {
        console.log(error);
    });
}

function unlike(postId) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/unlike',
        method: 'DELETE',
        data: {
            'like_id': postId
        },
    }).done(function(data, status, xhr) {
        console.log(data);
        $('.like-toggle[data-like-id="' + postId + '"]').addClass('far').removeClass('fas');
        // アイコンのクラスを切り替えて、塗りつぶしのハートから空のハートに変更
    }).fail(function(xhr, status, error) {
        console.log(error);
    });
}
function toggleLike(postId) {
    var likeIcon = $('.like-toggle[data-like-id="' + postId + '"]');
    if (likeIcon.hasClass('far')) {
        like(postId);
    } else {
        unlike(postId);
    }
}


</script>




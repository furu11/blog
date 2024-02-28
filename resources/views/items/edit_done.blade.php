<!-- resources/views/contacts/edit_done.blade.php -->


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>更新完了画面</title>
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
<body>
 
  <section class= "boxs">
    <div class= "contact_box">
      <h2>更新完了</h2>
     
      <div class= "logu">
       <p>更新しました。</p>
        <p><a href="{{ route('views.index') }}">トップへ戻る</a></p>
      </div>
    </div>
  </section>
 
</body>
</html>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>問い合わせ確認画面</title>
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
  <headers>
    @include("header")
  </headers>
  <section class="boxs">
    <div class="contact_box">
      <h2>投稿する</h2>
      <form method="post" action="{{ route('contact.complete') }}" enctype="multipart/form-data">
      @csrf

        <p>下記の内容をご確認の上送信ボタンを押してください</p>
        <p>内容を訂正する場合は戻るを押してください。</p>
        <dl class="confirm">

        <dt class="confirm__tag">氏名</dt>
      <dd>{{ $inputs['name'] }}</dd>
      <input type="hidden" name="name" value="{{ $inputs['name'] }}">


      <dt class="confirm__tag">年代</dt>
      <dd>{{ $inputs['age'] }}</dd>
      <input type="hidden" name="age" value="{{ $inputs['age'] }}">

          <dt class="confirm__tag">時間</dt>
      <dd>{{ $inputs['time_start'] }}</dd>
      <input type="hidden" name="time" value="{{ $inputs['time_start'] }}">

      <dt class="confirm__tag">時間</dt>
      <dd>{{ $inputs['time_end'] }}</dd>
      <input type="hidden" name="time" value="{{ $inputs['time_end'] }}">

          <dt class="confirm__tag">場所</dt>
      <dd>{{ $inputs['location'] }}</dd>
      <input type="hidden" name="location" value="{{ $inputs['location'] }}">

      <dt class="confirm__tag">募集要項</dt>
      <dd>{{ $inputs['body'] }}</dd>
      <input type="hidden" name="body" value="{{ $inputs['body'] }}">

         
          <dd class="confirm_btn">
            <button type="submit">送信する</button>
            <input type="button" value="戻る" onClick="history.back();">
          </dd>
        </dl>
      </form>
    </div>
  </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン画面</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <h1>ログイン画面</h1>
    <div class= "login_box">
    <form action="" method="post">
        @csrf
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" required>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" required>
        <a href="{{ route('password_reset.email.form') }}">パスワードをお忘れの方</a>
        <button type="submit">送信</button>

        <a href="register">新規登録の方はこちら</a>
        <a href="adminpass">管理者の方はこちら</a>
       
    </form>
</div>
</body>
</html>

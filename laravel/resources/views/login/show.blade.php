<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ログイン画面</h1>

<form action="{{ route('login.post') }}" method="post">
    @csrf
    <label for="email">メールアドレス</label>
    <input id="email" type="email" name="email">
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <button>送信</button>
</form>
</body>
</html>

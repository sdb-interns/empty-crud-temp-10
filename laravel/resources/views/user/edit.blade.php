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
<h1>ユーザー編集画面</h1>
<form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
    @csrf
    <label for="name">名前</label>
    <input id="name" name="name" type="text" value="{{ $user->name }}">
    <button>送信する</button>
</form>
</body>
</html>

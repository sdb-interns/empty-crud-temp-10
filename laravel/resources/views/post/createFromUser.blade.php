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
<h1>投稿作成画面</h1>
<form action="{{ route('post.storeFromUser') }}" method="post">
    @csrf
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title">
    <label for="text">本文</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <button>送信する</button>
</form>
</body>
</html>

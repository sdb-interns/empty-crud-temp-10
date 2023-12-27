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
<h1>Post一覧</h1>
<table>
    <thead>
    <tr>
        <th>title</th>
        <th>text</th>
        <th>user_name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->user->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

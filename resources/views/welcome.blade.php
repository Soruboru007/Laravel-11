<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <form action="/" method="POST">
        @csrf
        <input type="text" name="username" id="">
        <button type="submit">送信</button>
    </form>
</body>
</html>

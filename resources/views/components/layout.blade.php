<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Tutorial</title>
</head>
<body>
        {{-- <nav> は、HTMLの要素の一つで、ナビゲーションエリア（メニュー）を定義するためのセマンティックタグです。主に、ウェブページ内やサイト全体でのリンクをまとめるために使用されます。 --}}
    <nav>
        <a href="/">Home</a>
        <a href="/posts">Posts</a>
    </nav>
    {{ $slot }}
</body>
</html>

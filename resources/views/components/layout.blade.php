<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Tutorial</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
</body>
</html>

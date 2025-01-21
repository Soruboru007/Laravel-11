<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Tutorial</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 dark:bg-gray-800 text-gray-900 dark:text-white">
    <x-navbar/>

    <div class="max-w-6xl mx-auto">
        {{ $slot }}
    </div>
</body>
</html>

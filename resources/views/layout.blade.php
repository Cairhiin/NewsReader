<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>News Reader</title>
</head>
<body class="bg-white text-slate-800">
    <h1 class="text-3xl font-bold underline">News Reader</h1>
    {{-- VIEW OUTPUT GOES HERE --}}
    @yield('content')
</body>
</html>
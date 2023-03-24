<!DOCTYPE html>
<html lang="en" class="@if (Auth::user() && Auth::user()->mode == 'dark') dark @endif">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>News Reader</title>
    <x-head.tinymce-config />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-zinc-100 text-stone-700 dark:bg-gray-900 dark:text-zinc-100">
    <header>
        @include('partials._nav')
    </header>
    <main class="container mx-auto px-4 py-4 max-w-screen-2xl min-h-screen">
        {{-- VIEW OUTPUT GOES HERE --}}
        {{$slot}}
    </main>
    <footer class="text-center bg-stone-800 dark:bg-zinc-900 p-4 text-gray-100">
        Copyright Frank van de Voorde, <?php echo Date("Y"); ?>
    </footer>
    <x-flash-message />
</body>
</html>
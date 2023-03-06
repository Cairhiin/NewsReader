<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>News Reader</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-white text-slate-800">
    <nav>
        <h1 class="text-3xl font-bold underline">News Reader</h1>
        @auth
            <span>Welcome, {{Auth()->user()->name}}</span>
            <a href="/articles/manage"><i class="fa-solid fa-gear"></i> Manage articles</a>
            <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
        @else
            <a href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
            <a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
        @endauth
        <a href="/articles/create">Add Article</a>
    </nav>
    <main class="md:container md:mx-auto px-4 py-4 max-w-5xl">
        {{-- VIEW OUTPUT GOES HERE --}}
        {{$slot}}
    </main>
    <footer class="text-center bg-stone-800 p-4 text-gray-100">
        Copyright Frank van de Voorde, <?php echo Date("Y"); ?>
    </footer>
    <x-flash-message />
</body>
</html>
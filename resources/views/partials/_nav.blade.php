<nav class="sticky top-0 z-10">
    <div class="flex justify-between items-center bg-stone-900 text-gray-100 p-3">
        <div>
            <h1 class="text-3xl font-bold uppercase mx-4">News Reader</h1>
        </div>
        <div>
        @auth
            <div class="inline mx-2 font-bold">Welcome, {{Auth()->user()->name}}</div>
            <div class="inline ml-2 mr-4">
                <a class="mx-2" href="/articles/manage"><i class="fa-solid fa-gear"></i> Manage articles</a>
                <form class="inline ml-2" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </div>
        @else
        <div class="inline ml-2 mr-4">
            <a class="mx-2" href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
            <a href="/login ml-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
        </div>
        @endauth
        </div>
    </div>
    @if ($categories)
    <div class="flex justify-start bg-stone-200 text-stone-900 text-gray-100 p-3">
        <ul class="uppercase font-bold text-sm">
            @foreach ($categories as $category)
                <li class="inline mx-4">{{$category->name}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</nav>
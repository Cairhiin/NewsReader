<nav class="sticky top-0 z-10">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center bg-stone-900 text-gray-100 md:p-3">
        <div class="flex items-center p-3 md:p-0">
            <i id="menuToggle" class="fa-solid fa-bars text-2xl visible md:-ml-6 md:invisible aria-checked:rotate-90 transition-all"></i>
            <a href="/">
                <h1 class="text-3xl font-bold uppercase mx-4">
                    News Reader
                </h1>
            </a>
        </div>
        <div>
            <div id="menu" 
                class="absolute w-full h-screen -left-full aria-checked:left-0 md:relative md:left-0 transition-all easeout duration-500
                    md:block md:inline md:ml-2 md:mr-4 bg-slate-900/95 md:bg-stone-900"
            >
            @auth
                <div class="inline mx-2 font-bold md:text-sm lg:text-base hidden md:inline">Welcome, {{Auth()->user()->name}}</div>
                <div class="divide-y divide-slate-900 md:inline">
                    <a class="block md:mx-2 md:inline p-3 md:p-0 md:text-sm lg:text-base" href="/articles/manage">
                        <i class="fa-solid fa-gear pr-2"></i> Manage articles
                    </a>
                    <form class="block md:inline p-3 md:p-0 md:text-sm lg:text-base" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed pr-2"></i> Logout
                        </button>
                    </form>
                </div>
            @else
            <div class="divide-y divide-slate-900">
                <a class="block md:mx-2 md:inline p-3" href="/register"><i class="fa-solid fa-user-plus pr-2"></i> Register</a>
                <a class="block md:inline p-3" href="/login"><i class="fa-solid fa-arrow-right-to-bracket pr-2"></i> Login</a>
            </div>
            @endauth
            </div>
        </div>
    </div>
    @if ($categories)
    <div class="flex justify-start bg-stone-200 text-stone-900 text-gray-100 p-3">
        <ul class="uppercase font-bold text-sm">
            @foreach ($categories as $category)
                <a href="/categories/{{$category->id}}">
                    <li class="inline mx-4">{{$category->name}}</li>
                </a>
            @endforeach
        </ul>
    </div>
    @endif
</nav>
<script type="text/javascript" src="/scripts/nav.js"></script>
<x-layout>
    <div class="max-w-screen-lg mx-auto my-4">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Articles
            </h1>
        </header>
                @unless($articles->isEmpty())
                @foreach ($articles as $article)
                    <div class="flex gap-4 items-center justify-between even:bg-stone-200 even:dark:bg-gray-800 odd:dark:bg-gray-700 p-3 dark:text-slate-200">
                        <div>
                            <a href="/articles/{{$article->id}}">
                                {{$article->title}}
                            </a>
                        </div>
                        <div>
                            <div class="flex gap-4">
                                <x-button class="border border-sky-600 dark:border-sky-400 !text-sky-600 dark:!text-sky-400 
                                    hover:bg-sky-600 hover:!text-stone-100 dark:hover:!text-white">
                                    <a href="/articles/{{$article->id}}/edit">
                                        <i class="fa-solid fa-pen-to-square pr-3"></i> Edit
                                    </a>
                                </x-button>
                                <form method="POST" action="/articles/{{$article->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="border border-red-600 dark:amber-red-500 !text-red-600 dark:!text-amber-500 
                                        hover:bg-red-600 hover:!text-stone-100 dark:hover:!text-white">
                                        <i class="fa-solid fa-trash pr-3"></i> Delete
                                    </x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else

                        You have not published any articles
                @endif
                <div class="flex gap-4 mt-8">
                    <x-button class="bg-sky-600 hover:bg-sky-800"><a href="/articles/create"><i class="fa-solid fa-pen pr-3"></i>Add</a></x-button>
                    <x-button class="bg-red-600 hover:bg-amber-800"><a href="/"><i class="fa-solid fa-chevron-left pr-3"></i>Back</a></x-button>
                </div>
    </div>
</x-layout>
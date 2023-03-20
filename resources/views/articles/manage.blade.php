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
                    <div class="flex gap-4 items-center justify-between even:bg-stone-200 odd:bg-stone-300/75 p-3">
                        <div>
                            <a href="/articles/{{$article->id}}">
                                {{$article->title}}
                            </a>
                        </div>
                        <div>
                            <div class="flex gap-4">
                                <x-button class="bg-sky-600 hover:bg-sky-800">
                                    <a href="/articles/{{$article->id}}/edit">
                                        <i class="fa-solid fa-pen-to-square pr-3"></i> Edit
                                    </a>
                                </x-button>
                                <form method="POST" action="/articles/{{$article->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="bg-red-600 hover:bg-amber-600"><i class="fa-solid fa-trash pr-3"></i> Delete</x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else

                        You have not published any articles
                @endif
                <div class="flex gap-4 mt-8">
                    <x-button class="bg-sky-600 hover:bg-sky-800"><a href="/articles/create"><i class="fa-solid fa-pen"></i> Add</a></x-button>
                    <x-button class="bg-red-600 hover:bg-amber-600"><a href="/"><i class="fa-solid fa-chevron-left pr-3"></i> Back</a></x-button>
                </div>
    </div>
</x-layout>
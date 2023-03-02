<x-layout>
    <div class="container mx-auto px-4 py-4 max-w-5xl">
        <div>
            <p class="uppercase text-lime-300 font-bold">{{$article['author']}}</p>
            <h1 class="font-serif text-slate-100 text-3xl font-bold">{{$article['title']}}</h1>
            <p class="py-4">{{$article['content']}}</p>
        </div>
    </div>
</x-layout>
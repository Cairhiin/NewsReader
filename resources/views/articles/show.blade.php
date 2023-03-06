<x-layout>
    <div class="mx-auto px-4 py-4 max-w-5xl">
        <div>
            <p class="uppercase text-lime-300 font-bold">{{$article['author']}}</p>
            <h1 class="font-serif text-slate-100 text-3xl font-bold">{{$article['title']}}</h1>
            <figure class="relative">
                <img 
                    class="w-full aspect-[11/6] object-none" 
                    src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                />
                <figcaption class="absolute bottom-4 left-4">
                    {{-- TODO: Implement a caption --}}
                </figcaption>
            </figure>
            <p class="py-4">{{$article['content']}}</p>
        </div>
        <div>
            <a href="/articles/{{$article->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
        </div>
    </div>
</x-layout>
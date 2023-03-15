<x-layout>
    <div class="mx-auto my-4 py-8 px-12 max-w-screen-md bg-white rounded-md">
        <div>
            <h1 class="font-serif text-stone-700 text-3xl font-bold">{{$article['title']}}</h1>
            <p class="text-stone-400 text-sm"> 
                {{date('d.m.Y', strtotime($article->updated_at))}}    
            </p> 
            @if ($article->category->name != 'opinion')
                <figure class="relative">
                    <img 
                        class="w-full aspect-[11/6] object-none" 
                        src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                    />
                    <figcaption class="absolute bottom-4 left-4">
                        {{-- TODO: Implement a caption --}}
                    </figcaption>
                </figure>
            @endif
            <div class="py-4">{!! $article['content'] !!}</div>
        </div>
        {{-- Only show author image if it is an opinion piece --}}
        @if ($article->category->name == "opinion")
            <div class="ring-2 ring-slate-200 ring-offset-2 flex items-center my-5 bg-slate-400/5 rounded-xl relative h-24 overflow-hidden">
                @if ($article->author->image)
                    <img 
                        src="{{asset('storage/' . $article->author->image)}}"
                        class="w-40 h-40 rounded-full mr-2 absolute -left-10 border-16 border-slate-300 ring-16 ring-white"
                    />
                @endif
                <div>
                    <p class="ml-40 text-xl font-bold text-stone-700 leading-5">
                        {{$article->author->name}}
                    </p>
                    <p class="ml-40 text-md font-bold uppercase text-gray-500 leading-5">
                        {{$article->author->role}}
                    </p>  
                </div>
            </div>
        @endif
        <div>
            {{-- Add moderation buttons if the user is the author --}}
            @if (Auth::id() == $article->author->id)
                <a href="/articles/{{$article->id}}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
                <form method="POST" action="/articles/{{$article->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            @endif
        </div>
    </div>
</x-layout>
<x-layout>
    <div class="mx-auto my-4 py-8 px-12 max-w-screen-md bg-white rounded-md shadow-md">
        <div>
            <h1 class="font-serif text-stone-700 text-3xl font-bold">{{$article->title}}</h1>
            <p class="mb-4">
                {{$article->author->name}}
                <span class="text-stone-400 text-sm"> 
                    {{date('d.m.Y', strtotime($article->updated_at))}}    
                </span>
            </p> 
            @if ($article->category->name != 'opinion')
                <figure class="relative">
                    <img 
                        class="aspect-[11/6] object-none" 
                        src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                    />
                    @if ($article->caption)
                        <figcaption class="text-stone-500 italic">
                            {{$article->caption}}
                        </figcaption>
                    @endif
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
        {{-- Add moderation buttons if the user is the author --}}
        <div class="flex gap-4 mt-10">
            @if (Auth::id() == $article->author->id)
                <a href="/articles/{{$article->id}}/edit">
                    <button class="w-32 text-left bg-sky-600 hover:bg-sky-800 text-white rounded py-2 px-4 transition-colors duration-500 easeout">
                        <i class="fa-solid fa-pencil pr-3"></i> Edit
                    </button>
                </a>
                <form method="POST" action="/articles/{{$article->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="w-32 text-left bg-red-600 hover:bg-amber-600 text-white rounded py-2 px-4 transition-colors duration-500 easeout"><i class="fa-solid fa-trash pr-3"></i> Delete</button>
                </form>
            @endif
        </div>
    </div>
</x-layout>
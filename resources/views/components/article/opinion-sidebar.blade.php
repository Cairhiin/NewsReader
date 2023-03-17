@props(['opinions'])
<div {{ $attributes->merge(['class' => 'my-3']) }}>
    @foreach ($opinions as $opinion)
        @if ($loop->index < 5)
        <a href="articles/{{$opinion->id}}">
            <figure class="flex p-3 pr-32 h-20 border-b-2 border-zinc-100 bg-white items-center gap-4 overflow-hidden relative">
                <div>
                    <figcaption class="grow">
                        <h3 class="font-bold text-sm text-stone-700 leading-5 md:text-lg lg:text-sm xl:text-base xl:leading-5">{{$opinion->title}}</h3>
                        <p class="text-sm text-stone-400 leading-5">{{$opinion->author->name}}</p>
                    </figcaption>
                </div>
                <img class="w-32 h-32 rounded-full absolute -right-8 border-16 border-slate-300 ring-16 ring-zinc-100" src="{{$opinion->author->image ? asset('storage/' . $opinion->author->image) : asset('images/default.jpg')}}" />
            </figure>
        </a>
        @endif    
    @endforeach
</div>

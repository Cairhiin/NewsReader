@props(['opinions'])
<div {{ $attributes->merge(['class' => 'my-3']) }}>
    @foreach ($opinions as $opinion)
    <figure class="flex p-3 items-center gap-4 mb-1 overflow-hidden relative">
        <div>
            <figcaption class="grow">
                <h3 class="font-bold text-sm xl:text-lg">{{$opinion->title}}</h3>
                <p class="text-sm text-stone-400">{{$opinion->author->name}}</p>
            </figcaption>
        </div>
        <img class="w-32 h-32 rounded-full absolute -right-8 border-16 border-slate-300 ring-16 ring-zinc-100" src="{{$opinion->author->image ? asset('storage/' . $opinion->author->image) : asset('images/default.jpg')}}" />
    </figure>    
    @endforeach
</div>

@props(['opinions'])
<div {{ $attributes->merge(['class' => 'my-3']) }}>
    @foreach ($opinions as $opinion)
    <figure class="flex p-3 items-center gap-4 mb-1 overflow-hidden relative">
        <div>
            <figcaption class="grow">
                <h3 class="font-bold text-xl">{{$opinion->title}}</h3>
                <p class="text-sm text-stone-400">{{$opinion->author->name}}</p>
            </figcaption>
        </div>
        <img class="w-20 h-20 rounded-full absolute -right-5" src="{{$opinion->author->image ? asset('storage/' . $opinion->author->image) : asset('images/default.jpg')}}" />
    </figure>    
    @endforeach
</div>

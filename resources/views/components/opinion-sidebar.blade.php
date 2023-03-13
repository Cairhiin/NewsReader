@props(['opinions'])
<div {{ $attributes->merge(['class' => 'my-3']) }}>
    @foreach ($opinions as $opinion)
    <figure class="flex p-3 items-center gap-4 mb-1">
        <img class="w-20 h-20 rounded-full" src="{{$opinion->image ? asset('storage/' . $opinion->image) : asset('images/default.jpg')}}" />
        <div>
            <figcaption class="grow">
                <h3 class="font-bold text-xl">{{$opinion->title}}</h3>
                <p class="text-sm text-stone-400">{{$opinion->author->name}}</p>
            </figcaption>
        </div>
    </figure>    
    @endforeach
</div>

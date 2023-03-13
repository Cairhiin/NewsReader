@props(['opinions'])
<div {{ $attributes->merge(['class' => 'my-3 p-2 rounded-md']) }}>
    @foreach ($opinions as $opinion)
    <div class="flex">
        <img class="w-1/3" src="{{$opinion->image ? asset('storage/' . $opinion->image) : asset('images/default.jpg')}}" />
        <div>
            <h3>{{$opinion->title}}</h3>
            <p>{{$opinion->author->name}}</p>
        </div>
    </div>    
    @endforeach
</div>

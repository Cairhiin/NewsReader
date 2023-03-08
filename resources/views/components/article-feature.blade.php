@props(['articles'])
<section class="flex justify-center gap-1">
    <figure class="w-1/2">
        <img class="object-none h-full" src="{{$articles[0]->image ? asset('storage/' . $articles[0]->image) : asset('images/default.jpg')}}" />
    </figure>
    <div class="w-1/2">
        <figure class="mb-1">
            <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
        </figure>
        <div class="flex gap-1">
            <figure class="w-1/2">
                <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
            </figure>
            <figure class="w-1/2">
                <img class="object-none h-48 w-full" src="{{$articles[2]->image ? asset('storage/' . $articles[2]->image) : asset('images/default.jpg')}}" />
            </figure>
        </div>
    </div>
</section>
@props(['articles'])
<section class="grid grid-cols-2 grid-rows-2 gap-1 place-content-start mx-32 my-8">
    <figure>
        <img class="object-none h-full" src="{{$articles[0]->image ? asset('storage/' . $articles[0]->image) : asset('images/default.jpg')}}" />
    </figure>
    <div class="grid grid-cols-2 grid-rows-2 gap-1">
        <figure class="col-span-2">
            <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
        </figure>
        <div class="flex col-span-2 gap-1">
            <figure class="w-1/2">
                <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
            </figure>
            <figure class="w-1/2">
                <img class="object-none h-48 w-full" src="{{$articles[2]->image ? asset('storage/' . $articles[2]->image) : asset('images/default.jpg')}}" />
            </figure>
        </div>
    </div>
</section>
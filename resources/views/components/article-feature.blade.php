@props(['articles', 'categories'])
<section class="grid grid-cols-4 grid-rows-2 gap-1 place-content-start mx-32 my-8">
    <div class="col-span-2 row-span-2 relative">
        <figure class="h-full">
            <img class="object-none h-full" src="{{$articles[0]->image ? asset('storage/' . $articles[0]->image) : asset('images/default.jpg')}}" />
            <figcaption class="absolute bottom-16 px-4">
                <a href="">{{$articles[0]->category->name}}</a>
                <h2 class="text-white font-bold text-2xl drop-shadow truncate">{{$articles[0]->title}}</h2>
            </figcaption>
        </figure>
    </div>
    <div class="col-span-2 gap-1 relative">
        <figure class="col-span-2">
            <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
            <figcaption class="absolute bottom-8 px-4">
                <a href="">{{$articles[1]->category->name}}</a>
                <h2 class="text-white font-bold text-2xl drop-shadow truncate">{{$articles[1]->title}}</h2>
            </figcaption>
        </figure>
    </div>
    <div>
        <figure class="relative">
            <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
            <figcaption class="absolute top-28 px-2 ">
                <a href="">{{$articles[2]->category->name}}</a>
                <h2 class="text-white text-base font-bold drop-shadow leading-4">{{$articles[2]->title}}</h2>
            </figcaption>
        </figure>
    </div>
    <div>
        <figure class="relative">
            <img class="object-none h-48 w-full" src="{{$articles[2]->image ? asset('storage/' . $articles[2]->image) : asset('images/default.jpg')}}" />
            <figcaption class="absolute top-28 px-2">
                <a href="">{{$articles[3]->category->name}}</a>
                <h2 class="text-white text-base font-bold drop-shadow leading-4">{{$articles[3]->title}}</h2>
            </figcaption>
        </figure>
    </div>
</section>
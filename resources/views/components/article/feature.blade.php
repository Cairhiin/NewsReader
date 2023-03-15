@props(['articles', 'categories'])
<section class="grid grid-cols-4 grid-rows-2 gap-x-1 place-content-start my-4">
    <div class="col-span-2 row-span-2 relative">
        <a href="articles/{{$articles[0]->id}}">
            <figure class="h-full">
                <img class="object-none h-96 w-full" src="{{$articles[0]->image ? asset('storage/' . $articles[0]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[0]->category->name"></x-article.category>
                    <h2 class="absolute bottom-16 px-4 text-white font-bold text-2xl drop-shadow truncate">{{$articles[0]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div class="col-span-2 relative">
        <a href="articles/{{$articles[1]->id}}">
            <figure class="col-span-2">
                <img class="object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[1]->category->name"></x-article.category>
                    <h2 class="absolute bottom-8 px-4 text-white font-bold text-2xl drop-shadow truncate">{{$articles[1]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div>
        <a href="articles/{{$articles[2]->id}}">
            <figure class="relative">
                <img class="box-border border-t-4 object-none h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[2]->category->name" class="top-1"></x-article.category>
                    <h2 class="absolute top-32 px-2 text-white text-base font-bold drop-shadow leading-4">{{$articles[2]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div>
        <a href="articles/{{$articles[3]->id}}">
            <figure class="relative">
                <img class="box-border border-t-4 object-none h-48 w-full" src="{{$articles[2]->image ? asset('storage/' . $articles[2]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[3]->category->name" class="top-1"></x-article.category>
                    <h2 class="absolute top-28 px-2 text-white text-base font-bold drop-shadow leading-4">{{$articles[3]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
</section>
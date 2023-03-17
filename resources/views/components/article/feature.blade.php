@props(['articles', 'categories'])
<section class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-2 gap-x-1 place-content-start my-4">
    <div class="md:col-span-2 md:row-span-2 relative">
        <a href="articles/{{$articles[0]->id}}">
            <figure class="h-full">
                <img class="object-none h-72 md:h-96 w-full" src="{{$articles[0]->image ? asset('storage/' . $articles[0]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[0]->category->name"></x-article.category>
                    <h2 class="absolute bottom-0 py-4 px-4 text-white font-bold text-2xl drop-shadow">{{$articles[0]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div class="md:col-span-2 relative">
        <a href="articles/{{$articles[1]->id}}">
            <figure class="md:col-span-2">
                <img class="object-none h-72 md:h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[1]->category->name"></x-article.category>
                    <h2 class="absolute bottom-0 py-4 leading-6 px-4 text-white font-bold text-2xl drop-shadow">{{$articles[1]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div>
        <a href="articles/{{$articles[2]->id}}">
            <figure class="relative">
                <img class="box-border border-t-4 object-none h-72 md:h-48 w-full" src="{{$articles[1]->image ? asset('storage/' . $articles[1]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[2]->category->name" class="top-1"></x-article.category>
                    <h2 class="absolute bottom-0 px-2 py-4 text-white text-lg font-bold drop-shadow leading-5">{{$articles[2]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
    <div>
        <a href="articles/{{$articles[3]->id}}">
            <figure class="relative">
                <img class="box-border border-t-4 object-none h-72 md:h-48 w-full" src="{{$articles[2]->image ? asset('storage/' . $articles[2]->image) : asset('images/default.jpg')}}" />
                <figcaption>
                    <x-article.category :category="$articles[3]->category->name" class="top-1"></x-article.category>
                    <h2 class="absolute bottom-0 px-2 py-4 text-white text-lg font-bold drop-shadow leading-5">{{$articles[3]->title}}</h2>
                </figcaption>
            </figure>
        </a>
    </div>
</section>
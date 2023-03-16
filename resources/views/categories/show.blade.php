<x-layout>
    <div class="col-span-3 mx-4 xl:mx-32 my-4">
        <x-header>{{ $category->name }}</x-header>
        <div class="flex justify-center gap-8 my-4">
            @foreach ($articles as $article)
                @if ($loop->index < 2)
                    <figure class="relative">
                        <img 
                            class="object-fit" 
                            src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                        />
                        <figcaption>
                            <h2 class="absolute bottom-0 py-4 px-4 text-white font-bold text-2xl drop-shadow leading-7">
                                {{$article->title}}
                            </h2>
                        </figcaption>              
                    </figure> 
                    @if ($loop->index == 1)
                        </div>
                        <div class="flex">
                            <div class="grid grid-cols-3 gap-8 my-8 basis-3/4">
                    @endif
                @else
                    <figure>
                        <img 
                            class="object-fit" 
                            src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                        />
                        <figcaption>
                            <h3 class="py-2 text-stone-700 text-lg font-bold leading-5">
                                {{$article->title}}
                            </h3>
                            <p>
                                {{ explode('.', $article->content)[0] . '.'}}
                            </p>
                        </figcaption>               
                    </figure>
                @endif
            @endforeach
            </div>
            <div class="basis-1/4 m-8">
                <x-header>Populair</x-header>
                @foreach ($populairArticles as $article)
                    <h4>{{$loop->index}} - {{$article->title}}</h4>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
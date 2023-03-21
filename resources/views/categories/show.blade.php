<x-layout>
    @if ($category->name == 'opinion')
    <div class="lg:grid xl:gap-4 lg:gap-2 grid-cols-5">
        <div class="lg:col-span-3 xl:col-span-3 mx-4 my-4">
    @else
    <div>
        <div class="mx-4 xl:mx-32 my-4">
    @endif
        <x-header class="mb-4">{{ $category->name }}</x-header>
        @unless ($category->name === 'opinion')
        <section class="flex justify-center gap-8">
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
                        </section>
                        <div class="flex">
                            <section class="grid grid-cols-3 gap-8 my-8 basis-2/3">
                    @endif
                @else
                    <figure>
                        <img 
                            class="object-fit rounded" 
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
                </section>
            @else
                <section class="rounded-md shadow-md bg-white divide-y divide-slate-100 px-4">
                @foreach ($articles as $article)
                    <div class="flex gap-4 p-2 items-center">
                        <figure class="basis-24 flex-none">
                            <img class="w-24 rounded-full" src="{{$article->author->image ? asset('storage/' . $article->author->image) : asset('images/default.jpg')}}" />
                        </figure>
                        <div class="grow-0">
                            <h3 class="font-bold lg:text-base xl:text-lg">{{$article->title}}</h3>
                            <p class="uppercase text-sm">{{$article->author->name}}</p>
                            <p class="text-stone-400">{{date('d.m.Y', strtotime($article->updated_at))}}</p>
                        </div>
                    </div>
                @endforeach
                </section>
            </div>
            @endif
                
            <aside class="@if ($category->name == 'opinion') mt-4 mx-4 @else mt-8 ml-8 @endif col-span-2 ">
                <x-header class="mb-4">Populair</x-header>
                <div class="flex flex-col divide-y divide-slate-100 bg-white rounded mr-0 p-4">
                @foreach ($populairArticles as $article)
                    <div class="py-4 last:pb-0">
                        <p class="text-sm text-stone-400">{{date('d.m.Y', strtotime($article->updated_at))}}</p>
                        <h4>{{$article->title}}</h4>
                    </div>
                @endforeach
                </div>
            </aside>
        </div>
    </div>
</x-layout>
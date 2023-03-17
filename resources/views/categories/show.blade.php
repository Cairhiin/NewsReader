<x-layout>
    <div class="col-span-3 mx-4 xl:mx-32 my-4">
        <x-header>{{ $category->name }}</x-header>
        <section class="flex justify-center gap-8 my-4">
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
            <aside class="basis-1/3 ml-8 mt-8">
                <x-header class="mb-4">Populair</x-header>
                <div class="flex flex-col divide-y divide-slate-100 bg-white rounded mr-0 p-4">
                @foreach ($populairArticles as $article)
                    <h4 class="py-2 last:pb-0">{{$article->title}}
                        <span class="text-xs text-stone-400">{{date('d.m.Y', strtotime($article->updated_at))}}</span>
                    </h4>
                @endforeach
                </div>
            </aside>
        </div>
    </div>
</x-layout>
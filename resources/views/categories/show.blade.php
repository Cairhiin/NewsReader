<x-layout>
    <div class="@if ($category->name == 'opinion') lg:grid xl:gap-4 lg:gap-2 grid-cols-5 @endif">
        <div class="@if ($category->name == 'opinion') lg:col-span-3 xl:col-span-3 @else xl:mx-32 @endif mx-4 my-4">
        <x-header class="mb-4">{{ $category->name }}</x-header>
        @unless ($category->name === 'opinion')
        <section class="flex justify-center gap-8">
            @foreach ($articles as $article)
                <a href="/articles/{{$article->id}}">
                    @if ($loop->index < 2)
                        <figure class="relative">
                            <img 
                                class="object-fit" 
                                src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                            />
                            <figcaption>
                                <h2 class="text-shadow absolute bottom-0 py-4 px-4 text-white font-bold text-2xl drop-shadow leading-7">
                                    {{$article->title}}
                                </h2>
                            </figcaption>                                   
                        </figure> 
                    </a>
                    @if ($loop->index == 1)
                        </section>
                        <div class="flex flex-wrap lg:flex-nowrap">
                            <section class="grid grid-cols-3 gap-8 my-8 basis-2/3 grow">
                    @endif
                @else
                    <a href="/articles/{{$article->id}}">
                        <figure>
                            <img 
                                class="object-fit rounded" 
                                src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" 
                            />
                            <figcaption>
                                <h3 class="py-2 text-stone-700 dark:text-slate-400 text-lg font-bold leading-5">
                                    {{$article->title}}
                                </h3>
                                <p class="dark:text-slate-200">
                                    {{ explode('.', $article->content)[0] . '.'}}
                                </p>
                            </figcaption>                                       
                        </figure>
                    </a>
                @endif
            @endforeach
                </section>
            @else
                <section class="rounded-md shadow-md bg-white dark:bg-gray-800 divide-y divide-slate-100 dark:divide-slate-500 px-4">
                @foreach ($articles as $article)
                    <a href="/articles/{{$article->id}}">
                        <div class="flex gap-4 p-2 items-center">
                                <figure class="basis-24 flex-none">
                                    <img class="w-24 rounded-full" src="{{$article->author->image ? asset('storage/' . $article->author->image) : asset('images/default.jpg')}}" />
                                </figure>
                                <div class="flex-initial">
                                    <h3 class="font-bold lg:text-base xl:text-lg dark:text-slate-400">{{$article->title}}</h3>
                                    <p class="uppercase text-sm dark:text-slate-200">{{$article->author->name}}</p>
                                </div>
                        </div>
                    </a>
                @endforeach
                </section>
            </div>
            @endif
                
            <aside class="@if ($category->name == 'opinion') mt-4 mx-4 col-span-2 @else lg:mt-8 lg:ml-8 grow @endif">
                <x-header class="mb-4">Populair</x-header>
                <div class="flex flex-col divide-y divide-slate-100 dark:divide-slate-500 bg-white dark:bg-gray-800 rounded mr-0 p-4">
                @foreach ($populairArticles as $article)
                    <div class="py-4 last:pb-0">
                        <a href="/articles/{{$article->id}}">
                            <p class="text-sm text-stone-400 dark:text-slate-400">{{date('d.m.Y', strtotime($article->updated_at))}}</p>
                            <h4 class="dark:text-slate-200">{{$article->title}}</h4>
                        </a>
                    </div>
                @endforeach
                </div>
            </aside>
        </div>
    </div>
</x-layout>
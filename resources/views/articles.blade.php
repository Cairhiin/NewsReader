@extends('layout')
@section('content')
<main class="container mx-auto px-4 py-4">
    <div class="grid gap-10 grid-cols-5">
        <section class="col-span-3">
            @if (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            @foreach ($articles as $article) 
                @if ($loop->index % 3 == 0)
                    <article class="border-b border-solid border-stone-300">
                        <figure>
                            <img class="w-full aspect-[11/6] object-none" src="{{asset('images/default.jpg')}}" />
                            <div class="p-2 text-sky-500">
                                {{$article['tags']}}
                            </div>
                            <figcaption class="py-2">
                                <h2 class="font-serif text-stone-900 text-xl font-bold">
                                    <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
                                </h2>
                                <p class="text-sky-500 font-bold pt-2">{{$article['author']}}</p>
                            </figcaption>
                        </figure>
                    </article>
                @else
                    <article class="border-b border-solid border-stone-300">
                        <div class="py-2">
                            <h2 class="font-serif text-stone-900 text-xl font-bold">
                                <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
                            </h2>
                            <p class="text-sky-500 font-bold pt-2">{{$article['author']}}</p>
                            <p class="text-stone-700 pt-2">{{explode('.', $article['content'])[0] . '.'}}</p>
                            <div class="p-2 text-sky-500">
                                {{$article['tags']}}
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
        </section>
        <aside class="col-span-2">
            <h3>Most Read</h3>
        </aside>
    </div>
</main>
@endsection

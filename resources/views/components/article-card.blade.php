@props(['article', 'isArticleHighlighted'])

<article class="border-b border-solid border-stone-300">
    <a href="/articles/{{$article->id}}">
        <div class="py-2">
            @if ($isArticleHighlighted)
                <figure class="relative">
                    <img class="w-full aspect-[11/6] object-none" src="{{asset('images/default.jpg')}}" />
                    <figcaption class="absolute bottom-4 left-4">
                        <x-article-tags :tags="$article->tags" />
                    </figcaption>
                </figure>
            @endif
            <h2 class="font-serif text-stone-900 text-xl font-bold">
                {{$article->title}}</a>
            </h2>
            <p class="text-sky-500 font-bold pt-2">{{$article->author}}</p>
            <p class="text-stone-700 pt-2">{{explode('.', $article->content)[0] . '.'}}</p>
            @if (!$isArticleHighlighted)
                <div class="">
                    <x-article-tags :tags="$article->tags" />
                </div>
            @endif
        </div>
    </a>
</article>
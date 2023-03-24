@props(['article'])
<article>
    <a href="articles/{{$article->id}}">
        <figure>
            <img class="object-none" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
            <figcaption>
                <h2 class="py-2 text-stone-700 dark:text-slate-400 font-bold text-lg leading-5">{{$article->title}}</h2>
            </figcaption>
        </figure>
        <div class="dark:text-zinc-200">
            {{explode('.', $article->content)[0] . '.'}}
        </div>
    </a>
</article>
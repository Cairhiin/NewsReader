@props(['article'])
<article>
    <a href="articles/{{$article->id}}">
        <figure>
            <img class="object-none" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
            <figcaption>
                <h2 class="py-2 text-stone-700 font-bold text-lg leading-5">{{$article->title}}</h2>
            </figcaption>
        </figure>
        <div>
            {{explode('.', $article->content)[0] . '.'}}
        </div>
    </a>
</article>
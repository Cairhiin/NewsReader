@props(['article'])
<article class="flex gap-4 my-4">
    <figure class="basis-1/6">
        <img class="object-none" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
    </figure>
    <figcaption>
        <h3 class="font-bold text-lg text-stone-700">
            {{$article->title}}
        </h3>
        <p class="basis-5/6">
            {{explode('.', $article->content)[0] . '.'}}
        </p>  
    </figcaption>                         
</article>
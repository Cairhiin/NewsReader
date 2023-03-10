@props(['article'])
<article class="flex gap-4 py-2">
    <div>
        <h3 class="font-bold text-lg text-stone-700">
            {{$article->title}}
        </h3>
        <p class="basis-5/6">
            {{explode('.', $article->content)[0] . '.'}}
        </p>  
    </div>                         
</article>
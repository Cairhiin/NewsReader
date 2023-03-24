@props(['article'])
<article {{ $attributes->merge(['class' => 'my-3']) }}>
    <a href="articles/{{$article->id}}" class="flex gap-4">
        <figure class="basis-0 invisible sm:visible sm:basis-40">
            <img src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
        </figure>
        <div class="p-1 sm:basis-2/3 flex-initial">
            <h3 class="py-1 font-bold text-base text-stone-700 dark:text-slate-400 leading-5 mb-1 md:text-lg md:leading-5">
                {{$article->title}}
            </h3>
                <p class="text-sm sm:text-base dark:text-slate-200">
                    {{explode('.', $article->content)[0] . '.'}}  </p>                   
        </div>
    </a>                         
</article>
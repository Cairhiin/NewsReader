@props(['article'])
<article {{ $attributes->merge(['class' => 'my-3']) }}>
    <a href="articles/{{$article->id}}" class="flex gap-4">
        <figure class="basis-0 invisible sm:visible sm:basis-40">
            <img class="max-h-32" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
        </figure>
        <div class="p-2 sm:basis-2/3">
            <h3 class="py-1 font-bold text-base text-stone-700 leading-5 mb-1 md:text-lg md:leading-5">
                {{$article->title}}
            </h3>
                <p class="leading-5 pb-2 text-sm sm:text-base">
                    {{explode('.', $article->content)[0] . '.'}}            
                <span class="text-right text-stone-500 text-sm sm:text-base"> 
                    {{date('d.m.Y', strtotime($article->updated_at))}}    
                </span>           
        </div>
    </a>                         
</article>
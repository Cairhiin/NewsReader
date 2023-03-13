@props(['article'])
<article {{ $attributes->merge(['class' => 'my-3 rounded-r-md flex gap-4']) }}>
    <figure>
        <img class="w-32 h-full" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
    </figure>
    <div class="grow pr-4">
        <h3 class="font-bold text-lg text-stone-700">
            {{$article->title}}
        </h3>
        <p>
            {{explode('.', $article->content)[0] . '.'}}           
        </p> 
        <p class="pt-1 text-right">
            {{$article->author->name}},
            <span class="text-stone-400 text-sm"> 
                {{date('d.m.Y', strtotime($article->updated_at))}}    
            </span> 
        </p>           
    </div>                         
</article>
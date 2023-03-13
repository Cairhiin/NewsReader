@props(['article'])
<article {{ $attributes->merge(['class' => 'my-3 p-2 rounded-md']) }}>
    <div>
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
@props(['articles'])
<section class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-2 gap-x-1 place-content-start my-4">
    @foreach ($articles as $article)
        @if ($loop->index < 4)
            <div class="@if($loop->index < 2) md:col-span-2 @endif  @if($loop->index == 0) md:row-span-2 @endif relative">
                <a href="articles/{{$article->id}}">
                    <figure class="h-full @if($loop->index == 1) md:col-span-2 @endif">
                        <img class="@if($loop->index > 1) box-border border-t-4 @endif object-none h-72 md:h-48 dark:border-gray-900
                            @if($loop->index == 0) md:h-96 @endif w-full" src="{{$article->image ? asset('storage/' . $article->image) : asset('images/default.jpg')}}" />
                        <figcaption>
                            <x-article.category :category="$article->category->name" class="{{$loop->index > 1 ? 'top-1' : ''}}"></x-article.category>
                            <h2 class="text-shadow absolute bottom-0 py-4 px-4 text-white text-xl font-bold leading-6
                                @if($loop->index < 2) md:text-2xl @endif
                                @if($loop->index >= 2) md:text-lg leading-5 @endif">{{$article->title}}</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
        @endif
    @endforeach
</section>
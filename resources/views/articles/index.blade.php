<x-layout>   
    <div>
        <div class="col-span-3">            
            @if (count($articles) > 3) 
                <x-article-feature :articles=$articles></x-article-feature>
            @elseif (count($articles) == 0)
                <p>No articles found!</p>
            @else
            @foreach ($articles as $article) 
                @if ($loop->index >= 4)
                
                @endif
            @endforeach
            @endif
            <div class="mt-6 p-4">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>

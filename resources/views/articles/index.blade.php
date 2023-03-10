<x-layout>   
    <div>
        <div class="col-span-3 mx-32">            
            @if (count($articles) > 3) 
                <x-article-feature :articles=$articles></x-article-feature>
            @elseif (count($articles) == 0)
                <p>No articles found!</p>
            @endif          
            <section class="grid grid-cols-4 gap-8">          
            @foreach ($articles as $article) 
                @if ($loop->index >= 4 && $loop->index < 8)              
                    <x-article-card :article=$article></x-article-card>
                @endif
            @endforeach
            </section>
            <div class="mt-6 p-4">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>

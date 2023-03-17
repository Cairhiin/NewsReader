<x-layout>   
    <div>
        <div class="col-span-3 mx-4 xl:mx-32 my-4">            
            <x-header>News</x-header>
            @if (count($articles) > 3) 
                <x-article.feature :articles=$articles></x-article.feature>
            @elseif (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            {{-- End the feature section and start a new one  --}}          
            <section class="grid grid-cols-2 lg:grid-cols-4 gap-8 mt-8">          
            @foreach ($articles as $article) 
                {{-- Skip the first four news stories as they are in the featurette --}}
                @if (count($articles) > 3 && $loop->index >= 4 && $loop->index < 8)              
                    <x-article.card :article=$article></x-article.card>
                @elseif ($loop->index == 8)
            </section>    
            <section class="w-full my-8 flex justify-start">
                <div class="basis-3/5 mr-12">
                    <x-header>More news</x-header>
                @elseif ($loop->index > 8)
                    <x-article.simple-card :article=$article class="bg-white"></x-article.simple-card>
                @endif
            @endforeach
                </div>
                @if ($article ?? false)
                    @if ($article->category->name == 'news')       
                        <aside class="basis-2/5">
                            <x-header>Opinion</x-header>
                            <x-article.opinion-sidebar :opinions=$opinions class="bg-white"></x-article.opinion-sidebar>
                        </aside>
                    @endif
                @endif
            </section>        
            <div class="mt-6 p-4">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>

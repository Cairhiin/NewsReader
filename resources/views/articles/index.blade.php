<x-layout>   
    <div>
        <div class="col-span-3 my-4 md:mx-4 xl:mx-32">            
            <x-header>News</x-header>
            @if (count($articles) > 3) 
                <x-article.feature :articles=$articles></x-article.feature>
            @elseif (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            {{-- End the feature section and start a new one  --}}          
            <section class="grid grid-cols-2 gap-8 mt-8 lg:grid-cols-4">          
            @foreach ($articles as $article) 
                {{-- Skip the first four news stories as they are in the featurette --}}
                @if (count($articles) > 3 && $loop->index >= 4 && $loop->index < 8)              
                    <x-article.card :article=$article></x-article.card>
                @elseif ($loop->index == 8)
            </section>    
            <section class="my-8 flex flex-col justify-start lg:flex-wrap lg:flex-row lg:flex-nowrap">
                <div class="basis-3/5 lg:mr-12 mb-8 grow">
                    <x-header>More news</x-header>
                @elseif ($loop->index > 8)
                    <x-article.simple-card :article=$article class="bg-white rounded-sm"></x-article.simple-card>
                @endif
            @endforeach
                </div>
                @if ($article ?? false)
                    @if ($article->category->name == 'news')       
                        <aside class="basis-2/5 grow">
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

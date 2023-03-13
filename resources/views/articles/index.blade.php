<x-layout>   
    <div>
        <div class="col-span-3 mx-32 my-4">            
            <x-header>News</x-header>
            @if (count($articles) > 3) 
                <x-article-feature :articles=$articles></x-article-feature>
            @elseif (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            {{-- End the feature section and start a new one  --}}          
            <section class="grid grid-cols-4 gap-8 mt-12">          
            @foreach ($articles as $article) 
                {{-- Skip the first four news stories as they are in the featurette --}}
                @if ($loop->index >= 4 && $loop->index < 8)              
                    <x-article-card :article=$article></x-article-card>
                @elseif ($loop->index == 8)
            </section>    
            <section class="w-full my-8 flex justify-start">
                <div class="basis-2/3 mr-12">
                    <x-header>More news</x-header>
                @elseif ($loop->index > 8)
                    <x-article-simple-card :article=$article class="bg-white"></x-article-simple-card>
                @endif
            @endforeach
                </div>
                <aside class="basis-1/3">
                    <x-header>Opinion</x-header>
                    <x-opinion-sidebar :opinions=$opinions></x-opinion-sidebar>
                </aside>
            </section>        
            <div class="mt-6 p-4">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>

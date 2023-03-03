<x-layout>   
    <div class="grid gap-10 grid-cols-5">
        <section class="col-span-3">
            @if (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            @foreach ($articles as $article) 
                @php 
                    $isArticleHighlighted = ($loop->index % 3 == 0);
                @endphp
                <x-article-card :article="$article" :isArticleHighlighted="$isArticleHighlighted" />
            @endforeach

            <div class="mt-6 p-4">
                {{$articles->links()}}
            </div>
        </section>
        <aside class="col-span-2">
            <h3>Most Read</h3>
        </aside>
    </div>
</x-layout>

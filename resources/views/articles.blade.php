@extends('layout')
@section('content')
<main class="container mx-auto px-4 py-4 max-w-5xl">
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
        </section>
        <aside class="col-span-2">
            <h3>Most Read</h3>
        </aside>
    </div>
</main>
@endsection

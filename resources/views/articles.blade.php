@extends('layout')
@section('content')
<main class="container mx-auto px-4 py-4">
    <div class="grid gap-10 grid-cols-5">
        <section class="col-span-3">
            @if (count($articles) == 0)
                <p>No articles found!</p>
            @endif
            @foreach ($articles as $article) 
                @if ($loop->index % 3 == 0)
                    <x-article-card :article="$article" :isArticleHighlighted="true" />
                @else
                    <x-article-card :article="$article" :isArticleHighlighted="false" />
                @endif
            @endforeach
        </section>
        <aside class="col-span-2">
            <h3>Most Read</h3>
        </aside>
    </div>
</main>
@endsection

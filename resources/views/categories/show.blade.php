<x-layout>
    @foreach ($articles as $article)
        <div>{{ $article->title }}</div>
    @endforeach
</x-layout>
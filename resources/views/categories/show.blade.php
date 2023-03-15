<x-layout>
    <div class="col-span-3 mx-4 xl:mx-32 my-4">
        <x-header>{{ $category->name }}</x-header>
        @foreach ($articles as $article)
            <div>{{ $article->title }}</div>
        @endforeach
    </div>
</x-layout>
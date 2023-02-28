@extends('layout')
@section('content')
<div class="container mx-auto px-4 py-4 max-w-5xl">
    <h1 class="font-sans text-5xl uppercase font-bold text-slate-500 py-5">Latest News</h1>
    <div class="grid grid-cols-2 gap-x-5 gap-y-10">
        @if (count($articles) == 0)
            <p>No articles found!</p>
        @endif
        @foreach ($articles as $article) 
            <div>
                <h2 class="font-serif text-slate-100 text-xl font-bold">
                    <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
                </h2>
                <p class="uppercase text-lime-300 font-bold">{{$article['author']}}</p>
                <div class="flex py-4">
                    <img src="default.jpg" />
                    <p class="px-4">{{explode(".", $article['content'])[0] . "."}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

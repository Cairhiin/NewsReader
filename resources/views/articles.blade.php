@extends('layout')
@section('content')
<div class="container mx-auto px-4 py-4 max-w-5xl">
    <h1>News</h1>
    <div class="grid grid-cols-2 gap-x-5 gap-y-10">
        @if (count($articles) == 0)
            <p>No articles found!</p>
        @endif
        @foreach ($articles as $article) 
            <div>
                <h2 class="font-serif text-xl">
                    <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
                </h2>
                <p>{{$article['author']}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layout')
@section('content')
<div class="container mx-auto px-4 py-4 max-w-5xl">
    <h1 class="font-sans text-5xl uppercase font-bold text-slate-500 py-5">Latest News</h1>
    <div class="flex flex-wrap gap-10 justify-content">
        @if (count($articles) == 0)
            <p>No articles found!</p>
        @endif
        @foreach ($articles as $article) 
            <div class="basis-[47%] shrink flex-initial bg-stone-900/30 rounded-md shadow">
                <div class="h-64 bg-center" style="background-image: url({{asset('images/default.jpg')}})">
                    <div class="p-2 text-sky-500">
                        {{$article['tags']}}
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="font-serif text-slate-100 text-xl font-bold">
                        <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
                    </h2>
                    <p class="text-sky-500 font-bold pt-2">{{$article['author']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

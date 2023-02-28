@extends('layout')
@section('content')
<h1>News</h1>

@if (count($articles) == 0)
    <p>No articles found!</p>
@endif

@foreach ($articles as $article)
<h2>
    <a href="/articles/{{$article['id']}}">{{$article['title']}}</a>
</h2>
<p>{{$article['content']}}</p>
@endforeach
@endsection

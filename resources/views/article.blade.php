@extends('layout')
@section('content')
<h2>
    {{$article['title']}}
    <span class="author">{{$article['author']}}</span>
</h2>
<p>
    {{$article['content']}}
</p>
@endsection
@props(['tags'])
@php
    $splitTags = explode(',', $tags);
@endphp

<ul class="text-gray-100 text-sm">
    @foreach ($splitTags as $tag)
    <li class="inline-block bg-stone-900 mr-2 py-1 px-3 rounded-3xl align-middle text-center">
        {{$tag}}
    </li>
    @endforeach
</ul>
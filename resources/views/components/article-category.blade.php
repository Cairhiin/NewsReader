@props(['category'])
<div {{ $attributes->merge(['class' => 'absolute top-0 bg-sky-500 text-white font-bold uppercase py-1 px-2']) }}>
    {{$category}}
</div>
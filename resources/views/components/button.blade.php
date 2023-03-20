<button {{ $attributes->merge(['class' => 'h-10 w-32 text-left text-white rounded py-2 px-4 transition-colors duration-500 easeout'])}}>
    {{$slot}}
</button>
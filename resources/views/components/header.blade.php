<h2 {{ $attributes->merge([
        'class' => 
        "pb-2 pl-2 uppercase font-bold text-2xl text-stone-700 border-l-8 border-sky-500
        dark:border-sky-300 dark:text-zinc-200"
    ]) }}>
    {{ $slot }}
</h2>
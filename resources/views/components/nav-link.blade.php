@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 font-bold leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out  font-monsterat text-xl text-black-light'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xl font-bold leading-5 text-black-light hover:border-indigo-400 focus:outline-none  focus:border-indigo-400 transition duration-150 ease-in-out font-monsterat';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

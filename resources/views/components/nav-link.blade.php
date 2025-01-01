@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition hover:text-gray-500/75  focus:outline-none focus:border-indigo-700 font-extrabold text-teal-700'
            : 'inline-flex items-center px-1 pt-1 border-transparent text-sm font-medium leading-5 text-gray-500 transition hover:text-gray-500/75 focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

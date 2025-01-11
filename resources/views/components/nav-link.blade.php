@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-pink-400 dark:border-pink-600 text-sm font-medium leading-5 text-pink-900 dark:text-pink-500 focus:outline-none focus:border-pink-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-emerald-500 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 hover:border-emerald-300 dark:hover:border-emerald-700 focus:outline-none focus:text-emerald-700 dark:focus:text-emerald-300 focus:border-emerald-300 dark:focus:border-emerald-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

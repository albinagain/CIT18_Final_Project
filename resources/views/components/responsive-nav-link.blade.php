@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-semibold text-gray-900 hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500'
            : 'font-semibold text-gray-900 hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

@props([
    'tag',
    'size' => 'base'
])

@php
    $classes = 'bg-white/10 hover:bg-white/25 mx-1 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'small')
        $classes .= ' px-3 py-1 text-2xs';
    else
        $classes .= ' px-5 py-1 text-sm';
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>

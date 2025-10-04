@props([
    'employer',
    'width' => 90
])

<img class="rounded-xl" src="{{ asset($employer->logo) }}" alt="{{ $employer->name }}" width="{{ $width }}">

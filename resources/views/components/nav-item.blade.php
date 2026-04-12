@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'nav-link'
        : 'nav-link active';
@endphp

<span class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</span>

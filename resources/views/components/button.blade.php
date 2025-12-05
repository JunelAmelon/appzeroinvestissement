<!-- Composant: Bouton réutilisable -->
@props([
    'type' => 'submit',
    'variant' => 'primary',
    'size' => 'md',
    'icon' => '',
    'disabled' => false
])

@php
    $sizeClass = match($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => '',
    };
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "btn btn-{$variant} {$sizeClass}"]) }}
    {{ $disabled ? 'disabled' : '' }}
>
    @if($icon)
        <i class="fas fa-{{ $icon }} me-2"></i>
    @endif
    {{ $slot }}
</button>

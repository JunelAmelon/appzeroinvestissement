<!-- Composant: Card réutilisable -->
@props([
    'title' => '',
    'icon' => '',
    'class' => ''
])

<div class="card shadow-sm {{ $class }}">
    @if($title)
        <div class="card-header" style="background: var(--primary-color); color: white; padding-top: 1rem; padding-bottom: 1rem;">
            <div class="d-flex align-items-center">
                @if($icon)
                    <i class="fas fa-{{ $icon }} me-2"></i>
                @endif
                <h5 class="mb-0">{{ $title }}</h5>
            </div>
        </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

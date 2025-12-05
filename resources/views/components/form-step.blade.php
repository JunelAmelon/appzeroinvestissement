@props(['step', 'title', 'icon'])

<div class="form-step{{ $step == 1 ? ' active' : '' }}" data-step="{{ $step }}">
    <div class="form-section-title">
        <i class="fas fa-{{ $icon }} me-2"></i>{{ $title }}
    </div>
    <div class="divider"></div>
    
    {{ $slot }}
</div>

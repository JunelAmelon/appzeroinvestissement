<!-- Composant: Section de formulaire (titre + séparateur) -->
@props(['title', 'icon' => ''])

<div class="row mt-5 mb-3">
    <div class="col-12">
        <div class="d-flex align-items-center mb-3">
            @if($icon)
                <div class="bg-primary text-white rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-{{ $icon }}"></i>
                </div>
            @endif
            <h5 class="mb-0 text-primary fw-bold">{{ $title }}</h5>
        </div>
        <hr class="text-muted">
    </div>
</div>

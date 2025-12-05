<!-- Composant: Champ de formulaire réutilisable -->
@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'required' => false,
    'rows' => null,
    'options' => []
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label fw-600">
        {{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    @if($type === 'textarea')
        <textarea
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder ?: $label }}"
            @if($rows) rows="{{ $rows }}" @endif
            {{ $required ? 'required' : '' }}
        >{{ old($name, $value) }}</textarea>

    @elseif($type === 'select')
        <select
            class="form-select @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            {{ $required ? 'required' : '' }}
        >
            <option value="">-- Choisir une option --</option>
            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" @selected(old($name, $value) == $optionValue)>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>

    @else
        <input
            type="{{ $type }}"
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder ?: $label }}"
            value="{{ old($name, $value) }}"
            {{ $required ? 'required' : '' }}
        >
    @endif

    @error($name)
        <div class="invalid-feedback d-block mt-2">
            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
        </div>
    @enderror
</div>

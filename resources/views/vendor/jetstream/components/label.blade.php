@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label fw-bolder text-dark fs-6']) }}>
    {{ $value ?? $slot }}
</label>

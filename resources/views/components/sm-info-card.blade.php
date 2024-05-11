@props(['main', 'sub'])


<div class="d-flex flex-column mx-auto bg-light border border-white rounded-3 m-auto text-center">
    <p class="fw-bolder text-primary">
        {{ $main }}
    </p>
    <p class="fw-lighter small">{{ $sub }}</p>
</div>

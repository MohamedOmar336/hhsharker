@props(['main', 'sub', 'bg_transparent' => false])


<div class="{{ $bg_transparent ? 'info' : 'border d-flex flex-column info-card justify-content-center m-auto rounded-5 text-center'}}">
    <p class="fw-bolder title">
        {{ $main }}
    </p>
    <p class="fw-lighter small subtitle">{{ $sub }}</p>
</div>

<!-- Slot: img -->
@props(['name'])

<div id="feature">
    <div class="align-items-baseline d-flex gap-3 px-2">
        <div class="right-circle">
            <img src="{{ asset('assets-website/images/icons/right-circle.svg') }}" class="img-fluid" alt="img">
        </div>
        <p class="text-uppercase lead">{{ $name }}</p>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>

<!-- Slot: img -->
@props(['title', 'description'])

<div id="feature-wide" class="row">
    <div class="col-md-6 d-flex flex-column">
        <div>
            <x-section-header class="small">{{ $title }}</x-section-header>
            <p class="description">{{ $description }}</p>
        </div>

        <div class="ms-3 mt-auto">
            <x-arrow-button class="px-3">Learn more</x-arrow-button>
        </div>
    </div>
    <div class="col-md-6">
        {{ $slot }}
    </div>
</div>
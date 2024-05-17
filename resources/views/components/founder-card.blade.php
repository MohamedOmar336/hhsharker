<!-- Slot: img -->
@props(['title', 'name'])

<div id="founder-card" class="d-flex flex-column w-25">
    <!-- image -->
    {{ $slot }}

    <!-- Info -->
    <div class="info text-white">
        <h4 class="name">{{ $name }}</h4>
        <p class="title">{{ $title }}</p>
    </div>
</div>
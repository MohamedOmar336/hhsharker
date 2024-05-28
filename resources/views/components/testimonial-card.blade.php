{{-- Slot: img --}}
@props(['title', 'description', 'name'])

<article class="testimonial-card p-4 border border-white rounded-5 bg-opacity-10">
    <h3 class="text-3xl leading-9">{{ $title }}</h3>
    <p class="mt-4 small text-secondary">
        {{ $description }}
    </p>
    <div class="d-flex justify-content-between align-items-center mt-2">
        <div class="d-flex align-items-center gap-2">
            {{ $slot }}
            <div class="my-auto small">{{ $name }}</div>
        </div>
        <img src="{{ asset('assets-website/images/comma.svg') }}" class="mt-2" alt="comma">
    </div>
</article>

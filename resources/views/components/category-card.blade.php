@props([
    'title',
    'description',
    'button' => 'See More'
])

<article class="category-card">
    <div class="d-flex flex-column text-white">
            {{ $slot }}
        <div class="content d-flex flex-column rounded-5">
            <h2 class="text-3xl text-center">{{ $title }}</h2>
            <p class="mt-3">{{ $description }}</p>
            <a href="#" class="btn btn-outline-primary px-4 py-2 mt-3 rounded-pill bg-white">{{ $button }}</a>
        </div>
    </div>
</article>

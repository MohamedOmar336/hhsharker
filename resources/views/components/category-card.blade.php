@props([
    'title',
    'description',
    'button' => 'See More'
])

<article class="d-flex flex-column w-33 max-md-ml-0 max-md-w-100">
    <div class="d-flex flex-column flex-grow text-sm font-medium text-white mt-10">
        {{-- <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/815f65215ab07a1d633a30f7c30d612b55534e957b016b4464f939d02e16dda2?apiKey=95e93e0986c543eeab0cc2ed468bab82&"
            alt="Freezer" class="w-100 aspect-1.28" /> --}}
            {{ $slot }}
        <div class="d-flex flex-column p-4 border border-solid bg-primary border-white border-opacity-20 rounded-3 max-md-px-5">
            <h2 class="text-3xl text-center">{{ $title }}</h2>
            <p class="mt-3">{{ $description }}</p>
            <a href="#" class="btn btn-outline-primary px-4 py-2 mt-3 rounded-pill bg-white">{{ $button }}</a>
        </div>
    </div>
</article>

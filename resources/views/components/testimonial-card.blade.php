{{-- Slot: img --}}
@props(['title', 'description', 'name'])

<article
    class="p-4 border border-white bg-primary rounded-5 bg-opacity-10">
    <h3 class="text-3xl leading-9">{{ $title }}</h3>
    <p class="mt-4 small text-secondary">
        {{ $description }}
    </p>
    <div class="d-flex justify-content-between align-items-center mt-2">
        <div class="d-flex align-items-center gap-2">
            {{ $slot }}
            <div class="my-auto small">{{ $name }}</div>
        </div>
        <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8eb89d2b56848c4e788be1f3d1c9d201cb2f402bd1691548f0ac9d8441323e0?apiKey=95e93e0986c543eeab0cc2ed468bab82&"
            alt="" class="mt-2" />
    </div>
</article>

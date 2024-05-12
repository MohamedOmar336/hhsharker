@props([
    'href' => '#',
    'dark_background' => 'true',
    ])

<div class="{{ $dark_background == 'true' ? 'arrow-btn' : 'light arrow-btn'}}">
    <a href="{{ $href }}" class="text">
        {{ $slot }}
    </a>
    <a href="{{ $href }}" class="arrow">
        <img src=" {{ asset('assets-website/images/icons/arrow-left-solid.svg') }} " alt="Arrow Icon">
    </a>
</div>

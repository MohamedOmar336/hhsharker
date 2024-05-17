<x-layout>
    <x-slot:title>
        Home | HH Sharker
    </x-slot:title>

    <!-- main image & intro text -->
    @include('website.home._1')

    <!-- img section separator -->
    <x-divider />

    <!-- trusted brands -->
    @include('website.home._2')

    <!-- tabs -->
    @include('website.home._3')

    <!-- slider -->
    {{-- @include('website.home._4') --}}

    <!-- About us -->
    @include('website.home._5')

    <!-- devices -->
    @include('website.home._6')

    <!-- testimonials -->
    @include('website.home._7')
</x-layout>

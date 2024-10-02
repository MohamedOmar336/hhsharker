@extends('frontend.layouts.app')
@section('content')


<section class="product-banner wow fadeIn" data-wow-delay="1.2s">
    <div class="container ">
        <img src="{{ asset('assets-frontend/images/product-main-banner.png') }}">
        <div class="text-center">
            <a class="cutome-btn wow fadeInUp" data-wow-delay="0.5s" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">{{ __('website.air_conditioner.btn') }}</a>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

@if($airConditionerArr->count() > 0)
<section class="pro-mainlist-section">
    <div class="container">
        <div class="section-heading text-center wow fadeInUp">
            <h5>{{ __('website.air_conditioner.tab') }}</h5>
            <h2>{{ __('website.air_conditioner.title') }}</h2>
        </div>

        @foreach($airConditionerArr as $cat)
            <div class="pro-listmain wow fadeIn">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.5s">
                        <h3>{{ $cat->name }}</h3>
                        <p>{{ $cat->description }}</p>
                        <a class="cutome-btn" href="{{ route('frontend.air-conditioner.parent',['locale' => app()->getLocale(),'parent'=>$cat->slug]) }}">{{ __('website.air_conditioner.btn') }}</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                        <img src="{{ asset('images/'.$cat->image) }}">
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
@endif


<section class="gall-text-section wow fadeInUp">
    <div class="container">
        <h3>{{ __('website.air_conditioner.slider_title') }}</h3>
        <div class="single-gallery-image">
            <div class="owl-carousel owl-theme" id="single-gallery-image">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
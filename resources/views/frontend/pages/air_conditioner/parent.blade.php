@extends('frontend.layouts.app')
@section('content')

<section class="banner-space pro-banner-section wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-xxl-5 wow fadeInLeft" data-wow-delay="1.2s">
                <h1>{{ $parentCategoryArr->name }}</h1>
                <p>{{ $parentCategoryArr->description }}</p>
                <a class="cutome-btn" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">{{ __('website.air_conditioner.btn') }}</a>
            </div>
        </div>
        <img class="wow fadeInRight" data-wow-delay="1.2s" src="{{ asset('images/'.$parentCategoryArr->image) }}" alt="Banner Image">
    </div>
</section>

@include('frontend.layouts.includes.common_slider_1')

@if($airConditionerChildArr->count() > 0)
<section class="ac-resid-section">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-lg-6 ">
                <div class="section-heading section-p-heading wow fadeInLeft">
                    <h5>{{ __('website.air_conditioner.parent_title_1') }}</h5>
                    <h2>{{ __('website.air_conditioner.parent_title_2') }} <br> {{ $parentCategoryArr->name }}</h2>
                    <p>
                        {{ __('website.air_conditioner.parent_desc_1') }}
                    </p>
                </div>
                <div class="tag-main-div wow fadeInLeft">
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>{{ __('website.air_conditioner.tag_1') }}
                    </div>
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_2') }}
                    </div>
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_3') }}
                    </div>
                    <img class="tag-bg-img" src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
                <div class="img-div-resi-ac wow fadeInLeft">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                </div>
                <div class="nub-residiv wow fadeInLeft">
                    <div>
                        <h4><span class="numberanimation">100</span>+</h4>
                        <p>{{ __('website.air_conditioner.box_1') }}</p>
                    </div>
                    <div>
                        <h4><span class="numberanimation">10</span> {{ __('website.air_conditioner.box_2') }}</h4>
                        <p>{{ __('website.air_conditioner.box_3') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">

                @foreach($airConditionerChildArr as $cat)
                <div class="resi-prod-list wow fadeInRight">
                    <img src="{{ asset('images/'.$cat->image) }}" width="100%" alt="Product Image">
                    <div>
                        <h3>{{ $cat->name }} </h3>
                        <p>{{ $cat->description }}</p>
                        <a href="{{ route('frontend.air-conditioner.child',['locale' => app()->getLocale(),'child'=>$cat->slug,'parent'=>$parentCategoryArr->slug]) }}">{{ __('website.air_conditioner.btn') }}</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
@endif

<section class="tags-text-section wow fadeIn">
    <div class="container wow fadeInUp" data-wow-delay="0.3s">
        <h2>{{ __('website.air_conditioner.slider_title') }}</h2>
        <div class="tags-text-div">
            <div class="big-icon-tag wow rotateInDownLeft" data-wow-delay="0.6s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>{{ __('website.air_conditioner.tag_1') }}
            </div>
            <div class="big-icon-tag wow fadeInDown" data-wow-delay="0.8s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_2') }}
            </div>
            <div class="big-icon-tag wow rotateInDownRight" data-wow-delay="0.9s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_3') }}
            </div>
        </div>
    </div>
</section>

<section class="resi-cust-section">
    <div class="gal-test-slider wow bounceInUp">
        <h2>{{ __('website.air_conditioner.galleries') }}</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="hpp-cust-div">
                    <img src="{{ asset('assets-frontend/images/contact-testi-1.png') }}">
                    <img src="{{ asset('assets-frontend/images/contact-testi-2.png') }}">
                    <img src="{{ asset('assets-frontend/images/contact-testi-4.png') }}">
                </div>
                <p class="p-grey-color">
                    {{ __('website.air_conditioner.happy_customer_desc') }}
                </p>
            </div>
            <div class="col-lg-7 wow fadeInRight">
                <div class="section-heading text-lg-end">
                    <h2>{{ __('website.air_conditioner.happy_customer') }}</h2>
                </div>
            </div>
        </div>

        <div class="cross-image-slider wow fadeInUp">
            <div class="owl-carousel owl-theme" id="image-cross-slider">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-3.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-4.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-5.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-3.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-4.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-5.png') }}">
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
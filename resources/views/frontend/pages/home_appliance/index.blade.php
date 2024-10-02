@extends('frontend.layouts.app')
@section('content')


<section class="banner-space appliances-banner">
    <div class="container">
        <div class="text-center">
            <h1 class="wow fadeInLeft" data-wow-delay="1.2s">{{ __('website.home_appliances.section_1_title_1') }}</h1>
            <img class="wow fadeInRight" data-wow-delay="1.2s" src="{{ asset('assets-frontend/images/appliances-banner-img.png') }}">
            <h2 class="wow fadeInLeft" data-wow-delay="1.2s">{{ __('website.home_appliances.section_1_title_2') }}</h2>
            <h5 class="wow fadeInRight" data-wow-delay="1.2s">{{ __('website.home_appliances.section_1_title_3') }}</h5>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

@if($homeApplianceArr->count() > 0)
<section class="ac-resid-section">
    <div class="container">
        <div class="row gx-lg-5 ">
            <div class="col-lg-6 ">
                <div class="appi-list-grid">
                    <div class="wow fadeInLeft">
                        <div class="section-heading section-p-heading">
                            <h5>{{ __('website.home_appliances.why_beko_tag') }}</h5>
                            <h2>{{ __('website.home_appliances.why_beko') }}</h2>
                            <p>
                                {{ __('website.home_appliances.why_beko_desc') }}
                            </p>
                            <a class="cutome-btn" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">{{ __('website.home_appliances.btn') }}</a>
                        </div>
                    </div>
                    <div class="wow fadeInLeft">
                        <div class="tag-main-div">
                            <div class="small-icon-tag">
                                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.home_appliances.slider_title_1') }}
                            </div>
                            <div class="small-icon-tag">
                                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {!! __('website.home_appliances.slider_title_2') !!}
                            </div>
                            <div class="small-icon-tag">
                                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>{{ __('website.home_appliances.slider_title_3') }}
                            </div>
                            <img class="tag-bg-img" src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                        </div>
                        <div class="img-div-resi-ac">
                            <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                        </div>
                        <div class="nub-residiv">
                            <div>
                                <h4><span class="numberanimation">100</span>+</h4>
                                <p>Products</p>
                            </div>
                            <div>
                                <h4><span class="numberanimation">10</span>y<span class="ani-nub-small">up to</span></h4>
                                <p>Warranty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                @foreach($homeApplianceArr as $cat)
                <div class="resi-prod-list wow fadeInRight">
                    <img src="{{ asset('images/'.$cat->image) }}" width="100%" alt="Product Image">
                    <div>
                        <h3>{{ $cat->name }}</h3>
                        <p>{{ $cat->description}}</p>
                        <a href="{{ route('frontend.home-appliances.parent',['locale' => app()->getLocale(),'parent'=>$cat->slug]) }}">Learn More</a>
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
        <h2>hh shaker</h2>
        <div class="tags-text-div">
            <div class="big-icon-tag wow rotateInDownLeft" data-wow-delay="0.6s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> Energy-saving
            </div>
            <div class="big-icon-tag wow fadeInDown" data-wow-delay="0.8s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> High-efficiency
            </div>
            <div class="big-icon-tag wow rotateInDownRight" data-wow-delay="0.9s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> High-efficiency
            </div>
        </div>
    </div>
</section>

<section class="resi-cust-section">
    <div class="gal-test-slider wow bounceInUp">
        <h2>Galleries</h2>
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
                    Lorem ipsum dolor sit amet consectetur. Fermentum bibendum id tellus mattis eget at quam ac quam. Id sit vestibulum sodales posuere erat at.
                </p>
            </div>
            <div class="col-lg-7 wow fadeInRight">
                <div class="section-heading text-lg-end">
                    <h2>Happy Customers</h2>
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
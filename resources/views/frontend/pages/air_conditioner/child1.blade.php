@extends('frontend.layouts.app')
@section('content')
<section class="banner-space com-vrf-ban-section">
    <div class="container">
        <h1 class="wow fadeInLeft" data-wow-delay="1.2s">
            {{ __('website.air_conditioner.child_title_1') }}
        </h1>
        <div class="banner-main-vrf wow fadeInRight" data-wow-delay="1.2s">
            <div class="col-vrf hovered">
                <img class="vrf-banner-img" src="{{ asset('assets-frontend/images/vrf-banner.png')}}">
                <div class="vfr-banner-icon">
                    <span class="span-icon"><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>
                    <span class="span-text">{{ __('website.air_conditioner.child_slider_title_1') }}</span>
                </div>
            </div>
            <div class="col-vrf">
                <img class="vrf-banner-img" src="{{ asset('assets-frontend/images/vrf-banner.png')}}">
                <div class="vfr-banner-icon">
                    <span class="span-icon"><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>
                    <span class="span-text">{{ __('website.air_conditioner.child_slider_title_2') }}</span>
                </div>
            </div>
            <div class="col-vrf">
                <img class="vrf-banner-img" src="{{ asset('assets-frontend/images/vrf-banner.png')}}">
                <div class="vfr-banner-icon">
                    <span class="span-icon"><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>
                    <span class="span-text">{{ __('website.air_conditioner.child_slider_title_3') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

@if($airConditionerSubChildArr->count() > 0)
<section class="ac-resid-section">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="section-heading section-p-heading">
                    <h5>{{ __('website.air_conditioner.child_slider_tag') }}</h5>
                    <h2>{{ __('website.air_conditioner.parent_title_2') }} <br> {{ $childCategoryArr->name  }}</h2>
                    <p>
                        {{ __('website.air_conditioner.child_slider_description') }}
                    </p>
                    <a class="cutome-btn" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">{{ __('website.air_conditioner.btn') }}</a>
                </div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-6 ">

                <div class="tag-main-div wow fadeInLeft">
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_1') }}
                    </div>
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_2') }}
                    </div>
                    <div class="small-icon-tag">
                        <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.air_conditioner.tag_3') }}
                    </div>
                    <img class="tag-bg-img" src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                </div>
                <div class="img-div-resi-ac wow fadeInLeft">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png')}}">
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
                <div class="pt-lg-5 mt-lg-4"></div>
                @foreach($airConditionerSubChildArr as $cat)
                <div class="resi-prod-list wow fadeInRight">
                    <img src="{{ iiset($cat->image) ?  asset('images/'.$cat->image) : asset('assets-frontend/images/inner-prod-1.png')}}" width="100%" alt="Product Image">
                    <div>
                        <h3>{{ $cat->name }}</h3>
                        <p>{{ $cat->description }}</p>
                        <a href="{{ route('frontend.air-conditioner.subchild',['locale' => app()->getLocale(),'subchild'=>$cat->slug,'child'=>$childCategoryArr->slug,'parent'=>$parentCategoryArr->slug]) }}">{{ __('website.air_conditioner.btn') }}</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif


<section class="gall-text-section wow fadeInUp">
    <div class="container">
        <h3>{{ __('website.air_conditioner.slider_title') }}</h3>
        <div class="single-gallery-image">
            <div class="owl-carousel owl-theme" id="single-gallery-image">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

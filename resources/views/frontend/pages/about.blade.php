@extends('frontend.layouts.app')
@section('content')  
<section class="about-banner">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-delay="1.2s">
                    <img src="{{ asset('assets-frontend/images/about-banner-1.png') }}" alt="About Banner">
                </div>
                <div class="col-lg-6">
                    <div class="section-heading wow fadeInRightBig" data-wow-delay="1.5s">
                        <h5>{{ __('website.about.title') }}</h5>
                        <h2 class="wow fadeInRightBig" data-wow-delay="1.7s">{{ __('website.about.tag_line') }}</h2>
                    </div>
                    <div class="banner-p-text wow fadeInRightBig" data-wow-delay="1.9s">
                        {!! __('website.about.desc') !!}
                    </div>
                    <div class="mt-3 wow fadeInRightBig" data-wow-delay="2.1s">
                        <a class="cutome-btn" href="{{ route('frontend.contact-us',['locale' => app()->getLocale()]) }}">{{ __('website.about.btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.layouts.includes.common_slider_1')


    <section class="about-video-section ">
        <div class="container">
            <div class="video-banner wow fadeInLeft" data-wow-duration="1.5s">
                <img src="{{ asset('assets-frontend/images/video-banner.png') }}" alt="Video Banner">
                <span class="home-video-icon" data-bs-toggle="modal" data-bs-target="#videomodal">
                    <i class="fa-solid fa-play"></i>
                </span>
            </div>

            <div class="about-nub-div wow fadeIn" data-wow-duration="2s" style="background-image: url(images/about-nub-bg.png);">
                <div class="m-auto wow fadeInRightBig" data-wow-delay="0.4s">
                    <div class="ani-nub-banner"><span class="numberanimation-home-page">{{ __('website.about.middle_section.box_1_desc') }}</span>%</div>
                    <p class="p-nub-banner">{{ __('website.about.middle_section.box_1_title') }}</p>
                </div>
                <div class="m-auto wow fadeInRightBig" data-wow-delay="0.6s">
                    <div class="ani-nub-banner"><span class="numberanimation-home-page">{{ __('website.about.middle_section.box_2_desc') }}</span>{{ __('website.about.middle_section.box_2_desc_3') }}<span class="ani-nub-small">{{ __('website.about.middle_section.box_2_desc_2') }}</span></div>
                    <p class="p-nub-banner">{{ __('website.about.middle_section.box_2_title') }}</p>
                </div>
                {{-- <div class="m-auto wow fadeInRightBig" data-wow-delay="0.8s">
                    <div class="ani-nub-banner">{{ __('website.about.middle_section.box_3_desc') }}. <span class="numberanimation-home-page">{{ __('website.about.middle_section.box_3_desc_2') }}</span></div>
                    <p class="p-nub-banner">{{ __('website.about.middle_section.box_3_title') }}</p>
                </div> --}}
            </div>

            <div class="row gx-lg-5 about-text-p-div">
                <div class="col-lg-6 wow fadeInLeftBig">
                    <p> {{ __('website.about.middle_section.desc_1') }}</p>
                </div>
                <div class="col-lg-6 wow fadeInRightBig">
                    <p> {{ __('website.about.middle_section.desc_2') }}</p>
                </div>
            </div>

        </div>
    </section>

    <section class="about-last-banner">
        <div class="container">
            <div class="row gx-xl-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeftBig">
                    <h2> {{ __('website.about.last_section.title') }}</h2>
                    {!! __('website.about.last_section.desc') !!}
                </div>
                <div class="col-xl-6 wow fadeInRightBig">
                    <img src="{{ asset('assets-frontend/images/about-lsat-banner-1.png') }}" alt="About Banner">
                </div>
            </div>
        </div>
    </section>
@endsection
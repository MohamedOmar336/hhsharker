@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space latest-pro-banner wow fadeIn" data-wow-delay="1.2s">
    <div class="container">
        <img class="letest-banner-img-1 wow fadeInLeft" data-wow-delay="1.4s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="latest-pro-banner-text">
            <div class="wow fadeInLeft" data-wow-delay="1.2s">{{ __('website.our_latest_project.title_1') }}</div>
            <div class="wow fadeInRight" data-wow-delay="1.2s">{{ __('website.our_latest_project.title_2') }}</div>
            <div class="wow fadeInUp" data-wow-delay="1.2s">{{ __('website.our_latest_project.title_3') }}</div>
        </div>
        <div class="wow fadeInLeft" data-wow-delay="0.5s">
            <a class="cutome-btn green-custome-btn" href="#">{{ __('website.our_latest_project.btn') }}</a>
        </div>
        <div class="letest-box-banner wow zoomIn" data-wow-delay="1.2s">
            <div><span class="numberanimation">{{ __('website.our_latest_project.project_done_desc') }}</span>+</div>
            <p>{{ __('website.our_latest_project.project_done_title') }}</p>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')


<section class="pro-mainlist-section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="section-heading">
                    <h5>{{ __('website.our_latest_project.testimonial.tag') }}</h5>
                    <h2>{{ __('website.our_latest_project.testimonial.title') }}</h2>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                <p class="p-grey-color">
                    {{ __('website.our_latest_project.testimonial.desc') }}
                </p>
            </div>
        </div>
    </div>
    <div>
        <div class="owl-carousel owl-theme news-banner-slider wow fadeInUp" id="news-banner-slider">
            <div class="item">
                <div class="newspage-list-div">
                    <span>New</span>
                    <img src="{{ asset('assets-frontend/images/new-banner-slider-1.png')}}" alt="News Image">
                    <div>
                        <h5>Lorem ipsum dolor sit amet consectetur. </h5>
                        <p>May 14, 2024</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="newspage-list-div">
                    <span>New</span>
                    <img src="{{ asset('assets-frontend/images/new-banner-slider-1.png')}}" alt="News Image">
                    <div>
                        <h5>Lorem ipsum dolor sit amet consectetur. </h5>
                        <p>May 14, 2024</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="newspage-list-div">
                    <span>New</span>
                    <img src="{{ asset('assets-frontend/images/new-banner-slider-1.png')}}" alt="News Image">
                    <div>
                        <h5>Lorem ipsum dolor sit amet consectetur. </h5>
                        <p>May 14, 2024</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="newspage-list-div">
                    <span>New</span>
                    <img src="{{ asset('assets-frontend/images/new-banner-slider-1.png')}}" alt="News Image">
                    <div>
                        <h5>Lorem ipsum dolor sit amet consectetur. </h5>
                        <p>May 14, 2024</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="newspage-list-div">
                    <span>New</span>
                    <img src="{{ asset('assets-frontend/images/new-banner-slider-1.png')}}" alt="News Image">
                    <div>
                        <h5>Lorem ipsum dolor sit amet consectetur. </h5>
                        <p>May 14, 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tags-text-section wow fadeIn">
    <div class="container wow fadeInUp" data-wow-delay="0.3s">
        <h2>{{ __('website.our_latest_project.section_2.title') }}</h2>
        <div class="tags-text-div">
            <div class="big-icon-tag wow rotateInDownLeft" data-wow-delay="0.6s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span>  {{ __('website.our_latest_project.section_2.title_2') }}
            </div>
            <div class="big-icon-tag wow fadeInDown" data-wow-delay="0.8s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.our_latest_project.section_2.title_1') }}
            </div>
            <div class="big-icon-tag wow rotateInDownRight" data-wow-delay="0.9s">
                <span><img src="{{ asset('assets-frontend/images/home-tred-icon.svg') }}"></span> {{ __('website.our_latest_project.section_2.title_3') }}
            </div>
        </div>
    </div>
</section>

<section class="indu-topic-section wow fadeIn">
    <div class="container">
        <div class="section-heading text-center wow fadeInUp">
            <h2>{{ __('website.our_latest_project.highlited_topics.title') }}</h2>
        </div>
        <div class="indu-topic-list">
            <div class="topic-div-1 wow fadeIn" data-wow-delay="0.2s">
                <h3>Lorem ipsum dolor</h3>
                <img src="{{ asset('assets-frontend/images/indu-topic-1.png')}}" alt="Industry Topic">
            </div>
            <div class="topic-div-2 wow fadeIn" data-wow-delay="0.4s">
                <h3>Lorem ipsum dolor</h3>
                <img src="{{ asset('assets-frontend/images/indu-topic-1.png')}}" alt="Industry Topic">
            </div>
            <div class="topic-div-3 wow fadeIn" data-wow-delay="0.6s">
                <h3>Lorem ipsum dolor</h3>
                <img src="{{ asset('assets-frontend/images/indu-topic-1.png')}}" alt="Industry Topic">
            </div>
            <div class="topic-div-4 wow fadeIn" data-wow-delay="0.8s">
                <h3>Lorem ipsum dolor</h3>
                <img src="{{ asset('assets-frontend/images/indu-topic-1.png')}}" alt="Industry Topic">
            </div>
            <div class="topic-div-5 wow fadeIn" data-wow-delay="1s">
                <h3>Lorem ipsum dolor</h3>
                <img src="{{ asset('assets-frontend/images/indu-topic-1.png')}}" alt="Industry Topic">
            </div>
        </div>
        <div class="text-center wow fadeInUp">
            <a class="cutome-btn green-custome-btn" href="#">{{ __('website.our_latest_project.highlited_topics.btn') }}</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-3 wow fadeInLeftBig">
                <div class="section-heading">
                    <h5>{{ __('website.our_latest_project.testimonials.title') }}</h5>
                    <h2>{{ __('website.our_latest_project.testimonials.tagline') }}</h2>
                </div>
            </div>
            <div class="col-lg-1 col-xl-3"></div>
            <div class="col-lg-6 col-xl-6 wow fadeInRightBig">
                <p class="testim-h-p">{{ __('website.our_latest_project.testimonials.desc') }}</p>
                <a class="cutome-btn" href="{{ route('frontend.about', ['locale' => app()->getLocale()]) }}">{{ __('website.our_latest_project.testimonials.button') }}</a>
            </div>
        </div>

        <div class="row g-5 home-testi-list ">
            <div class="test-testi-h animate-this wow zoomInUp" data-wow-duration="3s">Testimonials</div>
            <div class="col-lg-4 wow fadeInLeftBig">
                <div class="testi-box">
                    <h4>{{ __('website.our_latest_project.testimonials.item_1.title') }}</h4>
                        <p>“{{ __('website.our_latest_project.testimonials.item_1.desc') }}”</p>
                    <div>
                        <img src="{{ asset('assets-frontend/images/testi-pro-1.png')}}" alt="Testimonial Profile Image"> {{ __('website.our_latest_project.testimonials.item_1.author') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 wow fadeInRightBig" data-wow-delay="0.4s">
                <div class="testi-box">
                    <h4>{{ __('website.our_latest_project.testimonials.item_2.title') }}</h4>
                        <p>“{{ __('website.our_latest_project.testimonials.item_2.desc') }}”</p>
                    <div>
                        <img src="{{ asset('assets-frontend/images/testi-pro-1.png')}}" alt="Testimonial Profile Image"> {{ __('website.our_latest_project.testimonials.item_2.author') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInLeftBig" data-wow-delay="0.2s">
                <div class="testi-box">
                    <h4>{{ __('website.our_latest_project.testimonials.item_3.title') }}</h4>
                        <p>“{{ __('website.our_latest_project.testimonials.item_3.desc') }}”</p>
                    <div>
                        <img src="{{ asset('assets-frontend/images/testi-pro-1.png')}}" alt="Testimonial Profile Image"> {{ __('website.our_latest_project.testimonials.item_3.author') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUpBig" data-wow-delay="0.8s">
                <div class="testi-box">
                    <h4>{{ __('website.our_latest_project.testimonials.item_4.title') }}</h4>
                        <p>“{{ __('website.our_latest_project.testimonials.item_4.desc') }}”</p>
                    <div>
                        <img src="{{ asset('assets-frontend/images/testi-pro-1.png')}}" alt="Testimonial Profile Image"> {{ __('website.our_latest_project.testimonials.item_4.author') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInRightBig" data-wow-delay="0.6s">
                <div class="testi-box">
                    <h4>{{ __('website.our_latest_project.testimonials.item_5.title') }}</h4>
                        <p>“{{ __('website.our_latest_project.testimonials.item_5.desc') }}”</p>
                    <div>
                        <img src="{{ asset('assets-frontend/images/testi-pro-1.png')}}" alt="Testimonial Profile Image"> {{ __('website.our_latest_project.testimonials.item_5.author') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
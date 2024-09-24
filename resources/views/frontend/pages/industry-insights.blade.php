@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space indu-banner-section wow fadeIn" data-wow-delay="1.2s">
        <div class="container">
            <div class="position-relative">
                <div class="news-banner-text indu-hbanenr-text-div-1">
                    <h1 class="wow fadeInLeft" data-wow-delay="1.4s">{{ __('website.industry_insight.title_1') }}</h1>
                </div>
                <div class="indu-banner-img">
                    <img class="back-img-indu-1 wow fadeIn" data-wow-delay="1.5s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                    <img class="back-img-indu-2 wow fadeIn" data-wow-delay="2.0s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                    <img class="wow fadeIn" data-wow-delay="1.2s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                </div>
                <div class="news-banner-text indu-hbanenr-text-div-2">
                    <h1 class="wow fadeInRight" data-wow-delay="1.8s">{{ __('website.industry_insight.title_2') }}</h1>
                </div>
            </div>
            <div class="indu-ban-nub wow fadeInLeft" data-wow-delay="1.5s">
                <h3><span class="numberanimation">{{ __('website.industry_insight.title_3') }}</span>+</h3>
                <p>{{ __('website.industry_insight.title_4') }}</p>
            </div>
            <div class="row indu-search-row">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-delay="0.5s">
                    <p>{{ __('website.industry_insight.desc') }}</p>
                </div>
                <div class="col-lg-6 wow fadeInRightBig" data-wow-delay="0.5s">
                    <form>
                        <div class="news-search-div">
                            <i class="fa-regular fa-magnifying-glass new-search-icon"></i>
                            <input class="news-search-input" type="search" placeholder="{{ __('website.industry_insight.search_placeholder') }}">
                            <button type="submit" class="news-search-btn">{{ __('website.industry_insight.search_btn') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    @include('frontend.layouts.includes.common_slider_1')

    <section class="indu-topic-section wow fadeIn">
        <div class="container">
            <div class="section-heading text-center wow fadeInUp">
                <h2>{{ __('website.industry_insight.topic_1_title') }}</h2>
            </div>
            <div class="indu-topic-list">
                <div class="topic-div-1 wow fadeInLeft" data-wow-delay="1s">
                    <h3>Lorem ipsum dolor</h3>
                    <img src="{{ asset('assets-frontend/images/indu-topic-1.png') }}" alt="Industry Topic">
                </div>
                <div class="topic-div-2 wow fadeInLeft" data-wow-delay="0.8s">
                    <h3>Lorem ipsum dolor</h3>
                    <img src="{{ asset('assets-frontend/images/indu-topic-1.png') }}" alt="Industry Topic">
                </div>
                <div class="topic-div-3 wow fadeInLeft" data-wow-delay="0.6s">
                    <h3>Lorem ipsum dolor</h3>
                    <img src="{{ asset('assets-frontend/images/indu-topic-1.png') }}" alt="Industry Topic">
                </div>
                <div class="topic-div-4 wow fadeInLeft" data-wow-delay="0.4s">
                    <h3>Lorem ipsum dolor</h3>
                    <img src="{{ asset('assets-frontend/images/indu-topic-1.png') }}" alt="Industry Topic">
                </div>
                <div class="topic-div-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <h3>Lorem ipsum dolor</h3>
                    <img src="{{ asset('assets-frontend/images/indu-topic-1.png') }}" alt="Industry Topic">
                </div>
            </div>
            <div class="text-center wow fadeInUp">
                <a class="cutome-btn green-custome-btn" href="#">{{ __('website.industry_insight.topic_1_btn') }}</a>
            </div>
        </div>
    </section>



    <section class="topic-slider-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="indu-topic-h-text">
                        <div class="section-heading">
                            <h2>{{ __('website.industry_insight.topic_2_title') }}</h2>
                        </div>
                        <p>{{ __('website.industry_insight.topic_2_desc') }}</p>
                    </div>
                </div>
                <div class="col-lg-8 pe-0 wow fadeInRight">
                    <div class="owl-carousel owl-theme indu-topic-slider-div" id="indu-topic-slider">
                        <div class="item">
                            <div class="indu-slider-list">
                                <img src="{{ asset('assets-frontend/images/indu-slider-1.png') }}" alt="Topics Image">
                                <div>
                                    <h4>Lorem ipsum</h4>
                                    <a href="#">{{ __('website.industry_insight.topic_2_btn') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($blogs->count() > 0)
    <section class="indu-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft">
                    <div class="section-heading">
                        <h2>{{ __('website.industry_insight.blog_section.title') }}</h2>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class="text-md-end">
                        <a class="cutome-btn green-custome-btn" href="#">{{ __('website.industry_insight.blog_section.btn_1') }}</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 wow fadeInLeft">
                    @if(isset($blogs[0]))
                    <div class="indu-big-list-div">
                        <img src="{{ asset('images/'.$blogs[0]->image) }}" alt="Blog Image">
                        <h3>{{ $blogs[0]->title_en }}</h3>
                        <p>{{ strip_tags($blogs[0]->content_en ) }}</p>
                        <span>{{ $blogs[0]->created_at->format('M d, Y') }}</span>
                        <a href="#">{{ __('website.industry_insight.blog_section.btn_2') }}</a>
                    </div>
                    @endif
                </div>
                <div class="col-lg-4 wow fadeInRight">
                    @foreach($blogs->skip(1)->take(3) as $blog)
                    <div class="indu-small-list-div">
                        <img src="{{ asset('images/'.$blog->image) }}" alt="Blog Image">
                        <h3>{{ $blog->title_en }}</h3>
                        <p>{{ $blog->created_at->format('M d, Y') }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="indu-last-slider-section">

        <div class="owl-carousel owl-theme indu-last-slider-div wow bounceInRight" id="indu-last-slider-1" data-wow-duration="4s">
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_1') }}</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-1.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-2.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_2') }}</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-3.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_1') }}</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-1.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-2.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_1') }}</h5>
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_2') }}</h5>
            </div>
        </div>

        <div class="owl-carousel owl-theme indu-last-slider-div wow bounceInLeft" id="indu-last-slider-2" data-wow-duration="4s">
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-4.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_1') }}</h5>
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_2') }}</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-5.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-6.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-4.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_2') }}</h5>
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_1') }}</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-5.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-6.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>{{ __('website.industry_insight.last_section.title_2') }}</h5>
            </div>
        </div>

    </section>
@endsection
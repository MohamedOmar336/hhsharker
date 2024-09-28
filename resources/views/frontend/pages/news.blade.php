@extends('frontend.layouts.app')
@section('content')   

<section class="banner-space news-banner">
        <div class="container">
            <div class="news-banner-text">
                <img class="news-tp-1 wow rollIn" data-wow-delay="1.4s" src="{{ asset('assets-frontend/images/new-banner-text-img.png') }}" alt="News Banner Text Image">
                <h1 class="wow bounceInDown" data-wow-delay="1.2s">{{ __('website.news.title') }}</h1>
                <img class="news-tp-2 wow fadeIn" data-wow-delay="1.8s" src="{{ asset('assets-frontend/images/new-banner-text-img.png') }}" alt="News Banner Text Image">
            </div>
            {{-- <form>
                <div class="news-search-div wow bounceInUp" data-wow-delay="1.5s">
                    <i class="fa-regular fa-magnifying-glass new-search-icon"></i>
                    <input class="news-search-input" type="search" placeholder="{{ __('website.news.placeholder') }}">
                    <button type="submit" class="news-search-btn">{{ __('website.news.btn') }}</button>
                </div>
            </form> --}}
        </div>
        @if($news->count() > 0)
        <div>
            <div class="owl-carousel owl-theme news-banner-slider wow fadeInUp" data-wow-delay="1.7s" id="news-banner-slider">
                @foreach($news as $newsItem)    
                <div class="item">
                    <div class="newspage-list-div">
                        <span>{{ __('website.news.new') }}</span>
                        <img src="{{ asset('images/'.$newsItem->image) }}" alt="News Image">
                        <div>
                            <h5>{{ $newsItem->title_en }}</h5>
                            <p>{{ $newsItem->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </section>

    @include('frontend.layouts.includes.common_slider_1')

    <section class="news-h-section">
        <div class="container">
            <div class="news-h-row wow fadeIn">
                <div class="row">
                    <div class="col-xl-5 col-xxl-4 wow fadeInLeft">
                        <div class="section-heading">
                            <h2>{{ __('website.news.middle_section.title') }} </h2>
                        </div>
                        <p>
                            {!! __('website.news.middle_section.description') !!}
                        </p>
                        <a class="cutome-btn green-custome-btn" href="#">{{ __('website.news.middle_section.btn') }}</a>
                    </div>
                    <div class="col-xl-7 col-xxl-8">
                        <div class="news-image-upper">
                            <img class="image-upp-1 wow fadeInLeft" data-wow-delay="0.2s" src="{{ asset('assets-frontend/images/upp-img-1.png') }}" alt="News Image">
                            <img class="image-upp-2 wow fadeInDown" data-wow-delay="0.4s" src="{{ asset('assets-frontend/images/upp-img-2.png') }}" alt="News Image">
                            <img class="image-upp-3 wow fadeInRight" data-wow-delay="0.8s" src="{{ asset('assets-frontend/images/upp-img-3.png') }}" alt="News Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            @if($news->count() > 0)
                <div class="row">
                    <div class="col-xl-4 wow fadeInLeft">
                        <div class="news-list-btn-col">
                            <div>
                                <div class="section-heading">
                                    <h2>{{ __('website.news.news_section.title') }} </h2>
                                </div>

                                <div class="news-tab-btn-div" id="nav-tab" role="tablist">
                                    <button class=" active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('website.news.news_section.all') }}</button>
                                    <button class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('website.news.news_section.popular') }}</button>
                                    <button class="" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{ __('website.news.news_section.new') }}</button>
                                </div>
                            </div>
                            <div>
                                <p>{{ __('website.news.news_section.desc') }}</p>
                                <a class="cutome-btn green-custome-btn" href="#">{{ __('website.news.news_section.btn2') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 wow fadeInRight">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="news-scroll-list">
                                    <div class="new-list-main-div">
                                        @foreach($news as $newsItem)
                                            <div class="news-list-tab">
                                                <img src="{{ asset('images/'.$newsItem->image) }}" alt="New Image">
                                                <div>
                                                    <h3>{{ $newsItem->title_en }}</h3>
                                                    <p>{{ strip_tags($newsItem->content_en) }}</p>
                                                    <span>{{ $newsItem->created_at->format('M d, Y') }}</span>
                                                    <a class="btn-a" href="#">{{ __('website.news.news_section.btn') }}</a>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>                               
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="news-scroll-list">                                
                                    <div class="new-list-main-div">
                                        @foreach($news as $newsItem)
                                            <div class="news-list-tab">
                                                <img src="{{ asset('images/'.$newsItem->image) }}" alt="New Image">
                                                <div>
                                                    <h3>{{ $newsItem->title_en }}</h3>
                                                    <p>{{ strip_tags($newsItem->content_en) }}</p>
                                                    <span>{{ $newsItem->created_at->format('M d, Y') }}</span>
                                                    <a class="btn-a" href="#">Read Now</a>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="news-scroll-list">                                
                                    <div class="new-list-main-div">
                                        @foreach($news as $newsItem)
                                            <div class="news-list-tab">
                                                <img src="{{ asset('images/'.$newsItem->image) }}" alt="New Image">
                                                <div>
                                                    <h3>{{ $newsItem->title_en }}</h3>
                                                    <p>{{ strip_tags($newsItem->content_en) }}</p>
                                                    <span>{{ $newsItem->created_at->format('M d, Y') }}</span>
                                                    <a class="btn-a" href="#">Read Now</a>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection
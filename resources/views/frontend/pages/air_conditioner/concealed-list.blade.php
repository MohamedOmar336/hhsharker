@extends('frontend.layouts.app')
@section('content')
<section class="banner-space winlist-banner-section">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="1.2s">
                <h1> {!! __('website.concealed.title') !!}</h1>
                <a class="cutome-btn" href="about.html">{{ __('website.concealed.btn') }}</a>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="1.2s">
                <img class="list-banner-img" src="{{ asset('assets-frontend/images/pro-12.png')}}" alt="Banner Image">
            </div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="1.2s">
                <div class="grid-banner-list">
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg')}}">{{ __('website.concealed.title_1') }}
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg')}}"> {{ __('website.concealed.title_2') }}
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg')}}"> {{ __('website.concealed.title_3') }}
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay="1.2s">

            </div>
        </div>

    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')



<section class="prod-list-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="section-heading">
                    <h2> {{ __('website.concealed.all_product') }}</h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="list-serach-div">
                    <button class="serch-filter-btn"><img src="{{ asset('assets-frontend/images/filter-icon.png')}}"></button>
                    <div class="serach-icon-div">
                        <img class="s-icon" src="{{ asset('assets-frontend/images/search-icon.svg')}}">
                        <form>
                            <input class="form-control" type="text" placeholder="{{ __('website.concealed.search_product') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 wow fadeInUp">
            <ul class="nav nav-pills inner-tab-pill mt-5 mb-5" id="pills-tab-inner" role="tablist">
                <button class="nav-link active" id="innter_list_1-tab" data-bs-toggle="pill" data-bs-target="#innter_list_1" type="button" role="tab" aria-controls="innter_list_1" aria-selected="true">{{ __('website.concealed.all_product') }}</button>
                <button class="nav-link" id="innter_list_2-tab" data-bs-toggle="pill" data-bs-target="#innter_list_2" type="button" role="tab" aria-controls="innter_list_2" aria-selected="false">Duct 6A Type</button>
                <button class="nav-link" id="innter_list_3-tab" data-bs-toggle="pill" data-bs-target="#innter_list_3" type="button" role="tab" aria-controls="innter_list_3" aria-selected="false">Duct 7A Type</button> 
            </ul>
            <div class="tab-content" id="pills-tabContent-inner">
                <div class="tab-pane fade show active" id="innter_list_1" role="tabpanel" aria-labelledby="innter_list_1-tab" tabindex="0">
                    <div class="row g-3 g-lg-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette Inverter AC 18000 BT</h3>
                                    <p>MCCTV18HRN3</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-2.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette Inverter AC 24000 BTU</h3>
                                    <p>MCCTV24HRN4</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette Inverter AC 30000 BTU</h3>
                                    <p>MCCTV30HRN2</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette Inverter AC 36 BTU</h3>
                                    <p>MCCTV36HRN4</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette  R32 Inverter AC 36000 BTU</h3>
                                    <p>New R32</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="inner-list-div">
                                <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                                <div class="innter-body-text">
                                    <h3>Midea Cassette  R32 Inverter AC 50000 BTU</h3>
                                    <p>New R32</p>
                                    <div>
                                        <span>360° CoolSurround</span>
                                        <span>Energy Saving</span>
                                        <span>Anti-Corrosion Performance</span>
                                        <span>Built-in Pump</span>
                                    </div>
                                    <a href="single-product.html">{{ __('website.concealed.btn') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="innter_list_2" role="tabpanel" aria-labelledby="innter_list_2-tab" tabindex="0">
                    Tab Details 2
                </div>
                <div class="tab-pane fade" id="innter_list_3" role="tabpanel" aria-labelledby="innter_list_3-tab" tabindex="0">
                    Tab Details 2
                </div>
            </div>
        </div>

    </div>
</section>

<section class="gall-text-section wow fadeInUp">
    <div class="container">
        <h3>{{ __('website.concealed.slider_title') }}</h3>
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
@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space values-banner wow fadeIn">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-12 wow fadeInLeftBig" data-wow-delay="1.2s">
                    <div class="section-heading ">
                        <h5>{{ __('website.value_vision.section_1.btn_1') }}</h5>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-delay="1.2s">
                    <div class="section-heading ">
                        <h2>{{ __('website.value_vision.section_1.title') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRightBig" data-wow-delay="1.2s">
                    <p>{{ __('website.value_vision.section_1.desc') }}</p>
                </div>
                <div class="col-lg-12 mt-lg-5 mt-3 wow fadeInUpBig" data-wow-delay="1.2s">
                    <img src="{{ asset('assets-frontend/images/values-banner-img.png') }}" alt="Values ​​and vision Banner">
                </div>
            </div>
        </div>
    </section>

    @include('frontend.layouts.includes.common_slider_1')

    <section class="p-value-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h5>{{ __('website.value_vision.section_2.btn_1') }}</h5>
                        <h2>{{ __('website.value_vision.section_2.title') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-3 offset-lg-2 wow fadeInRightBig">
                    {!! __('website.value_vision.section_2.desc') !!}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3 wow fadeInLeftBig">
                    <div class="value-img-box-1">
                        <img src="{{ asset('assets-frontend/images/value-img-text-1.png') }}" alt="Value Image">
                        <div>
                            <h5>{{ __('website.value_vision.section_3.box_1_title_1') }}</h5>
                            <p>{{ __('website.value_vision.section_3.box_1_title_2') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="value-img-box-2">
                        <img class="wow fadeInDownBig" data-wow-delay="0.3s" src="{{ asset('assets-frontend/images/value-img-text-2.png') }}" alt="Value Image">
                        <div class="wow fadeInUpBig" data-wow-delay="0.3s">
                            <h5>{{ __('website.value_vision.section_3.box_2_title_1') }}</h5>
                            <p>{{ __('website.value_vision.section_3.box_2_title_2') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="value-img-box-2 value-img-box-3">
                        <div class="vl-line-box wow fadeInDownBig" data-wow-delay="0.6s">
                            <h5>{{ __('website.value_vision.section_3.box_3_title_1') }}</h5>
                            <p>{{ __('website.value_vision.section_3.box_3_title_2') }}</p>
                        </div>
                        <img class="wow fadeInUpBig" data-wow-delay="0.6s" src="{{ asset('assets-frontend/images/value-img-text-3.png') }}" alt="Value Image">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInRightBig" data-wow-delay="0.9s">
                    <div class="value-img-box-1">
                        <img src="{{ asset('assets-frontend/images/value-img-text-4.png') }}" alt="Value Image">
                        <div>
                            <h5>{{ __('website.value_vision.section_3.box_4_title_1') }}</h5>
                            <p>{{ __('website.value_vision.section_3.box_4_title_2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vl-cust-section">
        <div class="container">
            <div class="vl-cust-div wow fadeInUp">
                <img class="valc-img-1 wow fadeInLeftBig" data-wow-delay="0.4s" src="{{ asset('assets-frontend/images/value-test-1.png') }}" alt="Value Customer Image">
                <img class="valc-img-2 wow fadeInDownBig" data-wow-delay="0.6s" src="{{ asset('assets-frontend/images/value-test-2.png') }}" alt="Value Customer Image">
                <img class="valc-img-3 wow fadeInRightBig" data-wow-delay="0.8s" src="{{ asset('assets-frontend/images/value-test-3.png') }}" alt="Value Customer Image">
                <img class="valc-img-4  wow fadeInLeftBig" data-wow-delay="0.5s" src="{{ asset('assets-frontend/images/value-test-3.png') }}" alt="Value Customer Image">
                <img class="valc-img-5 wow fadeInRightBig" data-wow-delay="0.9s" src="{{ asset('assets-frontend/images/value-test-4.png') }}" alt="Value Customer Image">
                <img class="valc-img-6 wow fadeInUpBig" data-wow-delay="0.6s" src="{{ asset('assets-frontend/images/value-test-5.png') }}" alt="Value Customer Image">
                <h2 class="wow fadeInUpBig" data-wow-delay="0.2s">{{ __('website.value_vision.section_4.title') }}</h2>
            </div>
        </div>
    </section>

    <section class="vision-last-section">
        <div class="container">
            <div class="row g-lg-5 g-4 mb-5">
                <div class="col-lg-5 col-xl-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h5>{{ __('website.value_vision.section_5.btn_1') }}</h5>
                        <h2>{{ __('website.value_vision.section_5.title') }}</h2>
                    </div>
                </div>
                <div class="col-lg-7 offset-xl-2 col-xl-7 wow fadeInRightBig">
                    <img class="vision-img-1" src="{{ asset('assets-frontend/images/vision-img-1.png') }}" alt="Vision Image">
                </div>
            </div>
            <div class="row gx-lg-5 g-4 pt-4">
                <div class="col-lg-5 wow fadeInLeftBig">
                    <img class="vision-img-2" src="{{ asset('assets-frontend/images/vision-img-2.png') }}" alt="Vision Image">
                </div>
                <div class="col-lg-7 wow fadeInRightBig">
                    {!! __('website.value_vision.section_5.desc') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('frontend.layouts.app')
@section('content')

    <section class="banner-space founders-banner">
        <div class="container">
            <div class="section-heading text-center wow fadeInDownBig">
                <h5> {{ __('website.company_founder.title') }}</h5>
                <h2> {{ __('website.company_founder.desc') }}</h2>
            </div>
            <div class="row justify-content-center mt-lg-5">
                <div class="col-md-6 col-lg-5 col-xl-4 wow fadeInLeftBig">
                    <div class="founder-list-div">
                        <img src="{{ asset('assets-frontend/images/founders-1.png') }}" alt="Founders Images">
                        <div>
                            <h5> {{ __('website.company_founder.founder_1') }}</h5>
                            <p> {{ __('website.company_founder.designation_1') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 wow fadeInRightBig">
                    <div class="founder-list-div">
                        <img src="{{ asset('assets-frontend/images/founders-2.png') }}" alt="Founders Images">
                        <div>
                            <h5> {{ __('website.company_founder.founder_2') }}</h5>
                            <p> {{ __('website.company_founder.designation_2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.layouts.includes.common_slider_1')

    <section class="p-founder-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h2> {!! __('website.company_founder.title') !!}</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 wow fadeInRightBig">
                    <div class="founders-p-div">
                        {!! __('website.company_founder.long_description') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('frontend.layouts.app')
@section('content')


    <section class="about-banner">
        <div class="container">
            <div class="row align-items-center mt-5 mb-5 ">
                <div class="col-lg-12">
                    <div class="page-not-found">
                        <h2 class="wow fadeInRightBig" data-wow-delay="1.2s">404</h2>
                        <h4 class="wow fadeInLeftBig" data-wow-delay="1.4s">Page Not Found</h4>
                        <a class="cutome-btn wow fadeInRightBig" data-wow-delay="1.6s" href="{{ route('frontend.home',['locale' => app()->getLocale()]) }}">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section> ⁠

@endsection
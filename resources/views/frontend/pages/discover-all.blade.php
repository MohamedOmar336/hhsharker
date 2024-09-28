@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space discover-view-all-banner ">
    <div class="container">
        <ul class="nav nav-pills inner-tab-pill mt-lg-5 mb-lg-5 mt-4 mb-4 wow fadeIn" data-wow-delay="1.2s" id="pills-tab-inner" role="tablist">
            <button class="nav-link active" id="discover_view_all_1-tab" data-bs-toggle="pill" data-bs-target="#discover_view_all_1" type="button" role="tab" aria-controls="discover_view_all_1" aria-selected="true">All Products</button>
            <button class="nav-link" id="discover_view_all_2-tab" data-bs-toggle="pill" data-bs-target="#discover_view_all_2" type="button" role="tab" aria-controls="discover_view_all_2" aria-selected="false">Category 1</button>
            <button class="nav-link" id="discover_view_all_3-tab" data-bs-toggle="pill" data-bs-target="#discover_view_all_3" type="button" role="tab" aria-controls="discover_view_all_3" aria-selected="false">Category 2</button>
            <button class="nav-link" id="discover_view_all_4-tab" data-bs-toggle="pill" data-bs-target="#discover_view_all_4" type="button" role="tab" aria-controls="discover_view_all_4" aria-selected="false">Category 3</button>
            <div class="list-serach-div">
                <div class="serach-icon-div">
                    <img class="s-icon" src="{{ asset('assets-frontend/images/search-icon.svg')}}">
                    <form>
                        <input class="form-control" type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </ul>
        <div class="tab-content" id="pills-tabContent-inner">
            <div class="tab-pane fade show active" id="discover_view_all_1" role="tabpanel" aria-labelledby="discover_view_all_1-tab" tabindex="0">
                <div class="discover-view-all-slider">
                    <div class="owl-carousel owl-theme" id="view-all-slider">
                        <div class="item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                            <div class="view-all-list">
                                <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                                <a href="{{ route('frontend.discover-single',['locale' => app()->getLocale()]) }}">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="discover_view_all_2" role="tabpanel" aria-labelledby="discover_view_all_2-tab" tabindex="0">
                Tab Details 2
            </div>
            <div class="tab-pane fade" id="discover_view_all_3" role="tabpanel" aria-labelledby="discover_view_all_3-tab" tabindex="0">
                Tab Details 3
            </div>
            <div class="tab-pane fade" id="discover_view_all_4" role="tabpanel" aria-labelledby="discover_view_all_4-tab" tabindex="0">
                Tab Details 4
            </div>
        </div>
    </div>
</section>


<section class="view-all-form-section wow fadeIn">
    <div class="container">
        <div class="section-heading wow fadeInLeft">
            <h2>Subscribe to get the latest tips</h2>
        </div>
        <form>
            <div class="view-all-sub-form wow fadeInUp">
                <div class="contact-input">
                    <label>Your Name <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="contact-input">
                    <label>Email Address <span>*</span></label>
                    <input type="email" class="form-control" placeholder="Your email">
                </div>
                <button class="contact-form-btn" type="submit">Subscribe</button>
            </div>
        </form>
    </div>
</section>
@endsection
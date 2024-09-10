@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space indu-banner-section">
        <div class="container">
            <div class="position-relative">
                <div class="news-banner-text indu-hbanenr-text-div-1">
                    <h1 class="wow fadeInLeft" data-wow-delay="0.4s">Industry</h1>
                </div>
                <div class="indu-banner-img">
                    <img class="back-img-indu-1 wow fadeInLeft" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                    <img class="back-img-indu-2 wow fadeInRight" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                    <img class="wow fadeInUp" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}" alt="Industry Image">
                </div>
                <div class="news-banner-text indu-hbanenr-text-div-2">
                    <h1 class="wow fadeInRight" data-wow-delay="0.8s">Insights</h1>
                </div>
            </div>
            <div class="indu-ban-nub wow fadeInLeft" data-wow-delay="0.5s">
                <h3><span class="numberanimation">100</span>+</h3>
                <p>Articles</p>
            </div>
            <div class="row indu-search-row">
                <div class="col-lg-6 wow fadeInLeft">
                    <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <form>
                        <div class="news-search-div">
                            <i class="fa-regular fa-magnifying-glass new-search-icon"></i>
                            <input class="news-search-input" type="search" placeholder="Search here...">
                            <button type="submit" class="news-search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <div class="owl-carousel owl-theme banner-green-slider wow bounceInRight" id="banner-green-line" data-wow-duration="3s">
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>founders</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
    </div>

    <section class="indu-topic-section wow fadeIn">
        <div class="container">
            <div class="section-heading text-center wow fadeInUp">
                <h2>Highlighted topic</h2>
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
                <a class="cutome-btn green-custome-btn" href="#">Learn More</a>
            </div>
        </div>
    </section>



    <section class="topic-slider-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="indu-topic-h-text">
                        <div class="section-heading">
                            <h2>Topics</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
                    </div>
                </div>
                <div class="col-lg-8 pe-0 wow fadeInRight">
                    <div class="owl-carousel owl-theme indu-topic-slider-div" id="indu-topic-slider">
                        <div class="item">
                            <div class="indu-slider-list">
                                <img src="{{ asset('assets-frontend/images/indu-slider-1.png') }}" alt="Topics Image">
                                <div>
                                    <h4>Lorem ipsum</h4>
                                    <a href="#">Read Now</a>
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
                        <h2>All blogs</h2>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class="text-md-end">
                        <a class="cutome-btn green-custome-btn" href="#">Learn More</a>
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
                        <a href="#">Read Now</a>
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
                <h5>Industry</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-1.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-2.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>Insight</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-3.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>Industry</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-1.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-2.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>Insight</h5>
            </div>
            <div class="item">
                <h5>Industry</h5>
            </div>
        </div>

        <div class="owl-carousel owl-theme indu-last-slider-div wow bounceInLeft" id="indu-last-slider-2" data-wow-duration="4s">
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-4.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>Industry</h5>
            </div>
            <div class="item">
                <h5>Insight</h5>
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
                <h5>Industry</h5>
            </div>
            <div class="item">
                <h5>Insight</h5>
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-5.png') }}" alt="Image">
            </div>
            <div class="item">
                <img src="{{ asset('assets-frontend/images/indu-log-6.png') }}" alt="Image">
            </div>
            <div class="item">
                <h5>Insight</h5>
            </div>
        </div>

    </section>
@endsection
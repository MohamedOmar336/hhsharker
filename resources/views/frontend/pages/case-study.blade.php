@extends('frontend.layouts.app')
@section('content')  

<section class="banner-space case-studies-banner-section">
    <div class="container">
        <h1 class="wow fadeInDown" data-wow-delay="1.2s">case studies</h1>
        <div class="case-s-b-row">
            <div class="case-s-ban-col">
                <img class="wow fadeInLeftBig" data-wow-delay="1.4s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}">
                <div class="wow fadeInLeftBig" data-wow-delay="1.4s">
                    <h3>Lorem ipsum </h3>
                    <a href="#"><i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="case-s-ban-col">
                <img class="wow fadeInUpBig" data-wow-delay="1.6s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}">
                <div class="wow fadeInUpBig" data-wow-delay="1.6s">
                    <h3>Lorem ipsum </h3>
                    <a href="#"><i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="case-s-ban-col">
                <img class="wow fadeInRightBig" data-wow-delay="1.8s" src="{{ asset('assets-frontend/images/indu-banner-1.png') }}">
                <div class="wow fadeInRightBig" data-wow-delay="1.8s">
                    <h3>Lorem ipsum </h3>
                    <a href="#"><i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
        <div class="row indu-search-row">
            <div class="col-lg-6 wow fadeInLeftBig" data-wow-delay="0.5s">
                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
            </div>
            <div class="col-lg-6 wow fadeInRightBig" data-wow-delay="0.5s">
                {{-- <form>
                    <div class="news-search-div">
                        <i class="fa-regular fa-magnifying-glass new-search-icon"></i>
                        <input class="news-search-input" type="search" placeholder="Search here...">
                        <button type="submit" class="news-search-btn">Search</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')



<section class="wow fadeIn">
    <div class="container">
        <div class="case-s-hilight-head">
            <div class="section-heading text-center wow fadeInUp">
                <h2>Highlighted cases</h2>
            </div>
            <div class="inner-case-div wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets-frontend/images/about-banner.png') }}">
                    </div>
                    <div class="col-lg-6">
                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. Ut phasellus arcu
                            est sollicitudin malesuada morbi sit.Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras
                            pharetra egestas erat. Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                        <h6>May 14, 2024</h6>
                        <a class="cutome-btn green-custome-btn " href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case-tab-section">
    <div class="container">
        <div class="section-heading text-center wow fadeInUp">
            <h2>Highlighted topic</h2>
        </div>

        <ul class="nav nav-pills case-tab-ul mb-5 wow fadeInUp" id="pills-tab-inner" role="tablist">
            <button class="nav-link active" id="case_tab_1-tab" data-bs-toggle="pill" data-bs-target="#case_tab_1" type="button" role="tab" aria-controls="case_tab_1" aria-selected="true">All</button>
            <button class="nav-link" id="case_tab_2-tab" data-bs-toggle="pill" data-bs-target="#case_tab_2" type="button" role="tab" aria-controls="case_tab_2" aria-selected="false">Popular</button>
            <button class="nav-link" id="case_tab_3-tab" data-bs-toggle="pill" data-bs-target="#case_tab_3" type="button" role="tab" aria-controls="case_tab_3" aria-selected="false">New</button>
            <button class="nav-link" id="case_tab_4-tab" data-bs-toggle="pill" data-bs-target="#case_tab_4" type="button" role="tab" aria-controls="case_tab_4" aria-selected="false">Category 1</button>
            <button class="nav-link" id="case_tab_5-tab" data-bs-toggle="pill" data-bs-target="#case_tab_5" type="button" role="tab" aria-controls="case_tab_5" aria-selected="false">Category 1</button>
            <button class="nav-link" id="case_tab_6-tab" data-bs-toggle="pill" data-bs-target="#case_tab_6" type="button" role="tab" aria-controls="case_tab_6" aria-selected="false">Category 1</button>
        </ul>

        <div class="tab-content" id="pills-tabContent-inner">
            <div class="tab-pane fade show active" id="case_tab_1" role="tabpanel" aria-labelledby="case_tab_1-tab" tabindex="0">
                <div class="row ">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="case-topic-list">
                            <img src="{{ asset('assets-frontend/images/blog-img-1.png') }}">
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur. </h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. </p>
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="case-topic-list">
                            <img src="{{ asset('assets-frontend/images/blog-img-1.png') }}">
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur. </h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. </p>
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="case-topic-list">
                            <img src="{{ asset('assets-frontend/images/blog-img-1.png') }}">
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur. </h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. </p>
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="case-topic-list">
                            <img src="{{ asset('assets-frontend/images/blog-img-1.png') }}">
                            <div>
                                <h4>Lorem ipsum dolor sit amet consectetur. </h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. </p>
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="case_tab_2" role="tabpanel" aria-labelledby="case_tab_2-tab" tabindex="0">
                Tab Details 2
            </div>
            <div class="tab-pane fade" id="case_tab_3" role="tabpanel" aria-labelledby="case_tab_3-tab" tabindex="0">
                Tab Details 3
            </div>
            <div class="tab-pane fade" id="case_tab_4" role="tabpanel" aria-labelledby="case_tab_4-tab" tabindex="0">
                Tab Details 4
            </div>
            <div class="tab-pane fade" id="case_tab_5" role="tabpanel" aria-labelledby="case_tab_5-tab" tabindex="0">
                Tab Details 5
            </div>
            <div class="tab-pane fade" id="case_tab_6" role="tabpanel" aria-labelledby="case_tab_6-tab" tabindex="0">
                Tab Details 6
            </div>
        </div>

    </div>
</section>

@endsection
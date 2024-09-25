@extends('frontend.layouts.app')
@section('content')
<section class="banner-space appliances-banner all-product-banner">
    <div class="container">
        <div class="text-center">
            <h1 class="wow fadeInLeft" data-wow-delay="1.2s">The Number 1 Brand</h1>
            <img class="wow fadeInRight" data-wow-delay="1.2s" src="{{ asset('assets-frontend/images/appliances-banner-img.png') }}">
            <div class="all-pro-banner-div ">
                <img class="all-pro-av-bg-img wow fadeInRight" data-wow-delay="1.2s" src="{{ asset('assets-frontend/images/all-product-ac-bg.png') }}">
            </div>
            <h2 class="wow fadeInLeft" data-wow-delay="1.2s">in Home Appliances</h2>
            <a class="cutome-btn wow fadeInUp" data-wow-delay="0.5s" href="about.html">Learn More</a>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

<section class="prod-list-section pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="section-heading">
                    <h2>All Products</h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="list-serach-div">
                    <button class="serch-filter-btn"><img src="{{ asset('assets-frontend/images/filter-icon.png') }}"></button>
                    <div class="serach-icon-div">
                        <img class="s-icon" src="{{ asset('assets-frontend/images/search-icon.svg') }}">
                        <form>
                            <input class="form-control" type="text" placeholder="Search Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 wow fadeInUp all-product-list">
            <ul class="nav nav-pills home-tab-main mb-5" id="pills-tab" role="tablist">
                <button class="nav-link active" id="list_pro_tab_1-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_1" type="button" role="tab" aria-controls="list_pro_tab_1" aria-selected="true">Refrigerators</button>
                <button class="nav-link" id="list_pro_tab_2-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_2" type="button" role="tab" aria-controls="list_pro_tab_2" aria-selected="false">Dishwashers</button>
                <button class="nav-link" id="list_pro_tab_3-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_3" type="button" role="tab" aria-controls="list_pro_tab_3" aria-selected="false">Washing Machines</button>
                <button class="nav-link" id="list_pro_tab_4-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_4" type="button" role="tab" aria-controls="list_pro_tab_4" aria-selected="false">Hobs and Cookers</button>
                <button class="nav-link" id="list_pro_tab_5-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_5" type="button" role="tab" aria-controls="list_pro_tab_5" aria-selected="false">Coffee Machines</button>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="list_pro_tab_1" role="tabpanel" aria-labelledby="list_pro_tab_1-tab" tabindex="0">

                    <ul class="nav nav-pills inner-tab-pill mb-5" id="pills-tab-inner" role="tablist">
                        <button class="nav-link active" id="innter_list_1-tab" data-bs-toggle="pill" data-bs-target="#innter_list_1" type="button" role="tab" aria-controls="innter_list_1" aria-selected="true">All Products</button>
                        <button class="nav-link" id="innter_list_2-tab" data-bs-toggle="pill" data-bs-target="#innter_list_2" type="button" role="tab" aria-controls="innter_list_2" aria-selected="false">Category 1</button>
                        <button class="nav-link" id="innter_list_3-tab" data-bs-toggle="pill" data-bs-target="#innter_list_3" type="button" role="tab" aria-controls="innter_list_3" aria-selected="false">Category 2</button>
                        <button class="nav-link" id="innter_list_4-tab" data-bs-toggle="pill" data-bs-target="#innter_list_4" type="button" role="tab" aria-controls="innter_list_4" aria-selected="false">Category 3</button>
                        <button class="nav-link" id="innter_list_5-tab" data-bs-toggle="pill" data-bs-target="#innter_list_5" type="button" role="tab" aria-controls="innter_list_5" aria-selected="false">Category 4</button>
                        <button class="nav-link" id="innter_list_6-tab" data-bs-toggle="pill" data-bs-target="#innter_list_6" type="button" role="tab" aria-controls="innter_list_6" aria-selected="false">Category 5</button>
                    </ul>
                    <div class="tab-content" id="pills-tabContent-inner">
                        <div class="tab-pane fade show active" id="innter_list_1" role="tabpanel" aria-labelledby="innter_list_1-tab" tabindex="0">
                            <div class="row g-3 g-lg-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 18000 BT</h3>
                                            <p>MCCTV18HRN3</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-2.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 24000 BTU</h3>
                                            <p>MCCTV24HRN4</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 30000 BTU</h3>
                                            <p>MCCTV30HRN2</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 36 BTU</h3>
                                            <p>MCCTV36HRN4</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette  R32 Inverter AC 36000 BTU</h3>
                                            <p>New R32</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette  R32 Inverter AC 50000 BTU</h3>
                                            <p>New R32</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 18000 BT</h3>
                                            <p>MCCTV18HRN3</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-2.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 24000 BTU</h3>
                                            <p>MCCTV24HRN4</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 30000 BTU</h3>
                                            <p>MCCTV30HRN2</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette Inverter AC 36 BTU</h3>
                                            <p>MCCTV36HRN4</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette  R32 Inverter AC 36000 BTU</h3>
                                            <p>New R32</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-list-div">
                                        <img src="{{ asset('assets-frontend/images/inner-prod-1.png') }}">
                                        <div class="innter-body-text">
                                            <h3>Midea Cassette  R32 Inverter AC 50000 BTU</h3>
                                            <p>New R32</p>
                                            <div>
                                                <span>360° CoolSurround</span>
                                                <span>Energy Saving</span>
                                                <span>Anti-Corrosion Performance</span>
                                                <span>Built-in Pump</span>
                                            </div>
                                            <a href="single-product.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="innter_list_2" role="tabpanel" aria-labelledby="innter_list_2-tab" tabindex="0">
                            Inner Tab Details 2
                        </div>
                        <div class="tab-pane fade" id="innter_list_3" role="tabpanel" aria-labelledby="innter_list_3-tab" tabindex="0">
                            Inner Tab Details 3
                        </div>
                        <div class="tab-pane fade" id="innter_list_4" role="tabpanel" aria-labelledby="innter_list_4-tab" tabindex="0">
                            Inner Tab Details 4
                        </div>
                        <div class="tab-pane fade" id="innter_list_5" role="tabpanel" aria-labelledby="innter_list_5-tab" tabindex="0">
                            Inner Tab Details 5
                        </div>
                        <div class="tab-pane fade" id="innter_list_6" role="tabpanel" aria-labelledby="innter_list_6-tab" tabindex="0">
                            Inner Tab Details 6
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="list_pro_tab_2" role="tabpanel" aria-labelledby="list_pro_tab_2-tab" tabindex="0">
                    Tab Details 2
                </div>
                <div class="tab-pane fade" id="list_pro_tab_3" role="tabpanel" aria-labelledby="list_pro_tab_3-tab" tabindex="0">
                    Tab Details 3
                </div>
                <div class="tab-pane fade" id="list_pro_tab_4" role="tabpanel" aria-labelledby="list_pro_tab_4-tab" tabindex="0">
                    Tab Details 4
                </div>
                <div class="tab-pane fade" id="list_pro_tab_5" role="tabpanel" aria-labelledby="list_pro_tab_5-tab" tabindex="0">
                    Tab Details 5
                </div>
            </div>
        </div>

    </div>
</section>


<section class="gall-text-section wow fadeInUp">
    <div class="container">
        <h3>hh shaker</h3>
        <div class="single-gallery-image">
            <div class="owl-carousel owl-theme" id="single-gallery-image">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-2.png') }}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/gal-slider-3.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
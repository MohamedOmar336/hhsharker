@extends('frontend.layouts.app')
@section('content')   
    <section class="home-banner">
        <div class="container">
            <h1 class="banner-text-animation wow fadeInLeft">
                <span class="word">Commercial Air Conditioners</span>
                <span class="word">With a Single Touch</span>
                <span class="word">Home Appliances</span>
            </h1>
            <h6 class="wow fadeInLeft">Find the Best Products for Your Need</h6>
            <a class="cutome-btn wow fadeInLeft" href="#">Additional Details</a>
            <div class="banner-box-row wow fadeInLeft">
                <div class="banner-box-col">
                    <div>
                        <div class="ani-nub-banner"><span class="numberanimation">100</span>%</div>
                        <p class="p-nub-banner">Satisfied Customer</p>
                    </div>
                </div>
                <div class="banner-box-col">
                    <div>
                        <div class="ani-nub-banner"><span class="numberanimation">10</span>Y<span class="ani-nub-small">up to</span></div>
                        <p class="p-nub-banner">Warranty</p>
                    </div>
                </div>
                <div class="banner-box-col">
                    <div>
                        <div class="ani-nub-banner">No. <span class="numberanimation">1</span></div>
                        <p class="p-nub-banner">Efficiency</p>
                    </div>
                </div>
            </div>
            <img class="banner-image wow fadeInRight" src="{{ asset('assets-frontend/images/banner-img-1.png') }}" alt="Banner Image">
        </div>


    </section>
    <div class="owl-carousel owl-theme banner-green-slider wow bounceInRight" id="banner-green-line" data-wow-duration="3s">
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
        <div class="item">
            <h5>Commercial Air Conditioners</h5>
        </div>
        <div class="item">
            <h5>Home Appliances</h5>
        </div>
        <div class="item">
            <h5>With a Single Touch</h5>
        </div>
    </div>

    <section class="logo-list-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft">
                    <div class="section-heading">
                        <h5>Quick Access</h5>
                        <h2>OUR TRUSTED BRANDS</h2>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight">
                    <div class="home-logo-list">
                        <span><img src="{{ asset('assets-frontend/images/logo-list-1.png') }}" alt="Logo List"></span>
                        <span><img src="{{ asset('assets-frontend/images/logo-list-2.png') }}" alt="Logo List"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row mb-4 wow fadeInUpBig">
                <div class="col-xl-8 m-auto">
                    <div class="section-heading text-center">
                        <h5>Quick Access</h5>
                        <h2>Find Your Perfect Solution <br> Explore Our Wide Range of Products.</h2>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills home-tab-main mb-5 wow fadeInUpBig" id="pills-tab" role="tablist">
                @if($airConditionProducts->count() > 0)
                    <button class="nav-link active" id="home_pro_tab_1-tab" data-bs-toggle="pill" data-bs-target="#home_pro_tab_1" type="button" role="tab" aria-controls="home_pro_tab_1" aria-selected="true">Air Conditioner</button>
                @endif 
                    @if($homeApplianceProducts->count() > 0)
                    <button class="nav-link {{ $airConditionProducts->count() == 0 ? 'active' : ''}}" id="home_pro_tab_2-tab" data-bs-toggle="pill" data-bs-target="#home_pro_tab_2" type="button" role="tab" aria-controls="home_pro_tab_2" aria-selected="false">Home Appliances</button>
                @endif            
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @if($airConditionProducts->count() > 0)
                <div class="tab-pane fade show active" id="home_pro_tab_1" role="tabpanel" aria-labelledby="home_pro_tab_1-tab" tabindex="0">
                    <div class="row justify-content-center gx-lg-5 gy-lg-2">
                        @foreach($airConditionProducts as $product)
                            <div class="col-md-6 col-lg-4 wow fadeInUpBig">
                                <div class="product-list-home">
                                    <div class="product-img"><img src="{{ Storage::url($product->image) }}" width="100%" alt="Product Image"></div>
                                    <div class="product-body">
                                        <h3>{{ $product->product_name_en }}</h3>
                                        <p>{{ $product->product_description_en }}</p>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if($homeApplianceProducts->count() > 0)
                <div class="tab-pane fade {{ $airConditionProducts->count() == 0 ? 'show active' : ''}}" id="home_pro_tab_2" role="tabpanel" aria-labelledby="home_pro_tab_2-tab" tabindex="0">
                    <div class="row justify-content-center gx-lg-5 gy-lg-2">
                        @foreach($homeApplianceProducts as $product)
                        <div class="col-md-6 col-lg-4">
                            <div class="product-list-home">
                                <div class="product-img"><img src="{{ Storage::url($product->image) }}" width="100%" alt="Product Image"></div>
                                <div class="product-body">
                                    <h3>{{ $product->product_name_en }}</h3>
                                    <p>{{ $product->product_description_en }}</p>
                                    <a href="#">See More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </section>

    @if($homeApplianceBestSellerProducts->count() > 0)
    <section class="home-slider-main">

        <img class="homeslider-img wow fadeIn" src="{{ asset('assets-frontend/images/home-slider-bg.png') }}" width="100%" alt="slider BG">

        <div class="section-heading text-center wow fadeInUpBig" data-wow-delay="1s">
            <h5>Best Selling Product</h5>
            <h2>Best Sellers In Home Appliances</h2>
        </div>

        @if($homeApplianceBestSellerProducts->count() > 5)
        <div class="home-drag-btn wow zoomInDown" data-wow-delay="0.5s">
            <i class="fa-regular fa-arrow-left-long"></i>DRAG<i class="fa-regular fa-arrow-right-long"></i>
        </div>
        @endif
        <div class="owl-carousel owl-theme mt-4 home-product-slider wow rollIn" id="home-product-slider">
            @foreach($homeApplianceBestSellerProducts as $product)
            <div class="item">
                <div class="home-slider-item">
                    <h4>{{ $product->product_name_en }}</h4>
                    <span>Best Seller</span>
                    <img src="{{ Storage::url($product->image) }}" alt="Product Image">
                    <a href="#">Learn More</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-1 text-center wow zoomInUp">
            <a class="cutome-btn" href="#">Learn More</a>
        </div>

    </section>
    @endif

    <section>
        <div class="container wow zoomIn">
            <div class="section-heading text-center">
                <h5>About Us</h5>
                <h2>Your Partner in Comfort and Efficiency</h2>
            </div>
            <div class="video-banner mt-4">
                <img src="{{ asset('assets-frontend/images/video-banner.png') }}" alt="Video Banner">
                <span class="home-video-icon" data-bs-toggle="modal" data-bs-target="#videomodal">
                    <i class="fa-solid fa-play"></i>
                </span>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <p class="p-grey-color">One of the largest companies in the air conditioning and home appliances sector, and the exclusive distributor of MIDEA air conditioners and BEKO home appliances in the Kingdom of Saudi Arabia.</p>
                </div>
                <div class="col-md-4 v-bb-btn-div">
                    <button class="cutome-btn" data-bs-toggle="modal" data-bs-target="#videomodal">Watch Video</buttom>
                </div>
            </div>
        </div>
    </section>

    <section class="home-commercial-section ">
        <div class="container-fluid">
            @if($airConditionFeaturedProducts->count() > 0)
            <div class="row">
                <div class="col-lg-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h5>Best Selling Product</h5>
                        <h2>Featured Air Conditioners</h2>
                    </div>
                    <a class="cutome-btn" href="#">Learn More</a>
                </div>
                <div class="col-lg-1 col-xl-3"></div>
                <div class="col-lg-8 col-xl-6 pe-0 wow fadeInRightBig">

                    <div class="commercial-list-home ">
                        @foreach($airConditionFeaturedProducts as $product)
                        <div class="comn-slider-list {{ numberToWord($loop->iteration) }}">
                            <img src="{{ Storage::url($product->image) }}" alt="Commercial Devices Image">
                            <h4>{{ $product->product_name_en }}</h4>
                            <p>{{ $product->product_description_en }}</p>
                            <a href="#">Learn More</a>
                        </div>
                        @endforeach
                    </div>

                    <!-- <div class="owl-carousel owl-theme" id="home-commercial-slider">
                        <div class="item">
                            <div class="comn-slider-list">
                                <img src="{{ asset('assets-frontend/images/comm-image-1.png') }}" alt="Commercial Devices Image">
                                <h4>Commercial Air Conditioners</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.</p>
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comn-slider-list">
                                <img src="{{ asset('assets-frontend/images/comm-image-1.png') }}" alt="Commercial Devices Image">
                                <h4>Commercial Air Conditioners</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.</p>
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comn-slider-list">
                                <img src="{{ asset('assets-frontend/images/comm-image-1.png') }}" alt="Commercial Devices Image">
                                <h4>Commercial Air Conditioners</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.</p>
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comn-slider-list">
                                <img src="{{ asset('assets-frontend/images/comm-image-1.png') }}" alt="Commercial Devices Image">
                                <h4>Commercial Air Conditioners</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.</p>
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
            @endif
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h5>Testimonials</h5>
                        <h2>What they Say about us</h2>
                    </div>
                </div>
                <div class="col-lg-1 col-xl-3"></div>
                <div class="col-lg-6 col-xl-6 wow fadeInRightBig">
                    <p class="testim-h-p">Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.</p>
                    <a class="cutome-btn" href="#">Learn More</a>
                </div>
            </div>

            <div class="row g-5 home-testi-list ">
                <div class="test-testi-h animate-this wow zoomInUp" data-wow-duration="3s">Testimonials</div>
                <div class="col-lg-4 wow fadeInLeftBig">
                    <div class="testi-box">
                        <h4>Amazing Product!</h4>
                        <p>“Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.”</p>
                        <div>
                            <img src="{{ asset('assets-frontend/images/testi-pro-1.png') }}" alt="Testimonial Profile Image"> John David
                        </div> 
                    </div>
                </div> 
                <div class="col-lg-4 offset-lg-4 wow fadeInRightBig" data-wow-delay="0.4s">
                    <div class="testi-box">
                        <h4>Amazing Product!</h4>
                        <p>“Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.”</p>
                        <div>
                            <img src="{{ asset('assets-frontend/images/testi-pro-1.png') }}" alt="Testimonial Profile Image"> John David
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeftBig" data-wow-delay="0.2s">
                    <div class="testi-box">
                        <h4>Amazing Product!</h4>
                        <p>“Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.”</p>
                        <div>
                            <img src="{{ asset('assets-frontend/images/testi-pro-1.png') }}" alt="Testimonial Profile Image"> John David
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUpBig" data-wow-delay="0.8s">
                    <div class="testi-box">
                        <h4>Amazing Product!</h4>
                        <p>“Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.”</p>
                        <div>
                            <img src="{{ asset('assets-frontend/images/testi-pro-1.png') }}" alt="Testimonial Profile Image"> John David
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRightBig" data-wow-delay="0.6s">
                    <div class="testi-box">
                        <h4>Amazing Product!</h4>
                        <p>“Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna non mi orci sit sed. Quam pretium sit ultricies turpis sed.”</p>
                        <div>
                            <img src="{{ asset('assets-frontend/images/testi-pro-1.png') }}" alt="Testimonial Profile Image"> John David
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
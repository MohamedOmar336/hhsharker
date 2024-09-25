@extends('frontend.layouts.app')
@section('content')
<section class="banner-space single-main-banner wow fadeIn">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="1.2s">
                <img class="single-main-img" src="{{ asset('assets-frontend/images/pro-4.png')}}">
                <div class="sing-btn-main">
                    <a class="sing-btn-1" href="commercial-support.html">Request a Quote</a>
                    <a class="sing-btn-2" href="sales-and-support.html">Contact Sales</a>
                </div>
                <div class="sing-text-icon">
                    <a href="#"><img src="{{ asset('assets-frontend/images/clipboard-icon-1.svg') }}">Technical Specification</a>
                    <a href="#"><img src="{{ asset('assets-frontend/images/clipboard-icon-2.svg') }}">SASO Certificate</a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="1.2s">
                <h1 class="single-main-heading">
                    Midea Inverter Cassette AC Hot/Cold 18000 BTU
                </h1>
                <div class="sing-tag-main">
                    <h5>MCCTV18HRN3</h5>
                    <div>
                        BTU:
                        <select class="form-select">
                            <option selected>17000</option>
                            <option value="1">18000</option>
                            <option value="2">19000</option>
                            <option value="3">20000</option>
                            <option value="4">21000</option>
                        </select>
                    </div>
                </div>

                <div class="scroll-sing-main">
                    <div class="sing-scroll-div">
                        <div class="sing-color-box">
                            <h5 class="singel-inner-h5">Features:</h5>
                            <div class="list-sing-div">
                                <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-1.png')}}"></span>
                                <div>
                                    <h6>360° CoolSurround</h6>
                                    <p>To ensure air diffusion for uniform cooling. New corner outlets eliminate dead angles, creating a vortex for immediate cooling.</p>
                                </div>
                            </div>
                            <div class="list-sing-div">
                                <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-2.png')}}"></span>
                                <div>
                                    <h6>Anti-Corrosion Technologies</h6>
                                    <p>Includes <b>"Prime Guard"</b> and <b>"Anti-Corrosion Casing"</b> for enhanced rust resistance.</p>
                                </div>
                            </div>
                            <div class="list-sing-div">
                                <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-3.png')}}"></span>
                                <div>
                                    <h6>Built-in Drain Pump</h6>
                                    <p>Capable of lifting condensing water up to 750mm.</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="singel-inner-h5">Characteristics:</h5>
                        <div class="charec-list-div">
                            <div>
                                <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-4.png')}}"></span>
                                <p>Remote Control</p>
                            </div>
                            <div>
                                <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-5.png')}}"></span>
                                <p>Wi-Fi Connectivity</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="sing-customer-section wow fadeIn">
    <div class="container">
        <img class="sing-cust-img-1 wow fadeInLeft" data-wow-delay="0.2s" src="{{ asset('assets-frontend/images/sing-cust-img-1.png')}}">
        <img class="sing-cust-img-2 wow fadeInRight" data-wow-delay="0.4s" src="{{ asset('assets-frontend/images/sing-cust-img-2.png')}}">
        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Happy Customers</h3>
        <div class="customer-sing-slider-div wow fadeInUp">
            <div class="owl-carousel owl-theme" id="sign-cross-slider">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-1.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-2.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-3.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-4.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-5.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-1.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-2.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-3.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-4.png')}}">
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/cross-slider-img-5.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sing-rec-pro-section">
    <div class="container-fluid pe-0">
        <div class="section-heading wow fadeInUp">
            <h2>Recommended Products</h2>
        </div>

        <div class="sing-recom-slider wow fadeInUp" data-wow-delay="0.2s">
            <div class="owl-carousel owl-theme" id="recommend-product">
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
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
                            <a href="single-product.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('frontend.layouts.app')
@section('content')  
<section class="about-banner">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeftBig">
                    <img src="{{ asset('assets-frontend/images/about-banner.png') }}" alt="About Banner">
                </div>
                <div class="col-lg-6 wow fadeInRightBig">
                    <div class="section-heading ">
                        <h5>About Us</h5>
                        <h2>who we are?</h2>
                    </div>
                    <div class="banner-p-text">
                        <p>HH Shaker Company is one of the leading companies in the field of air conditioners and home appliances in the Kingdom of Saudi Arabia.</p>
                        <p>Shaker Group was established During the reign of Sheikh Ibrahim Shaker in 1950. It has built a solid reputation and strong market presence over the past more than half a century.</p>
                    </div>
                    <div class="mt-3">
                        <a class="cutome-btn" href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="owl-carousel owl-theme banner-green-slider wow bounceInRight" id="banner-green-line" data-wow-duration="3s">
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
        <div class="item">
            <h5>about us</h5>
        </div>
        <div class="item">
            <h5>h&h Shaker</h5>
        </div>
    </div>


    <section class="about-video-section ">
        <div class="container">
            <div class="video-banner wow zoomIn" data-wow-duration="1s">
                <img src="{{ asset('assets-frontend/images/video-banner.png') }}" alt="Video Banner">
                <span class="home-video-icon" data-bs-toggle="modal" data-bs-target="#videomodal">
                    <i class="fa-solid fa-play"></i>
                </span>
            </div>

            <div class="about-nub-div wow fadeIn" data-wow-duration="2s" style="background-image: url(images/about-nub-bg.png);">
                <div class="m-auto wow fadeInRightBig" data-wow-delay="0.4s">
                    <div class="ani-nub-banner"><span class="numberanimation">100</span>%</div>
                    <p class="p-nub-banner">Satisfied Customer</p>
                </div>
                <div class="m-auto wow fadeInRightBig" data-wow-delay="0.6s">
                    <div class="ani-nub-banner"><span class="numberanimation">10</span>Y<span class="ani-nub-small">up to</span></div>
                    <p class="p-nub-banner">Warranty</p>
                </div>
                <div class="m-auto wow fadeInRightBig" data-wow-delay="0.8s">
                    <div class="ani-nub-banner">No. <span class="numberanimation">1</span></div>
                    <p class="p-nub-banner">Efficiency</p>
                </div>
            </div>

            <div class="row gx-lg-5 about-text-p-div">
                <div class="col-lg-6 wow fadeInLeftBig">
                    <p>The journey was completed by the modern trading company, Hussein and Hassan Ghazi Shaker Ltd, representing the esteemed history of the Shaker Group.</p>
                </div>
                <div class="col-lg-6 wow fadeInRightBig">
                    <p>Thanks to our commitment to quality and efficiency, we succeed in providing a diverse range of high-quality products to meet diverse customer needs.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="about-last-banner">
        <div class="container">
            <div class="row gx-xl-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeftBig">
                    <h2>100% Satisfied customer</h2>
                    <p>We offer a wide variety of home appliances, including air conditioners, refrigerators, washing machines, televisions, and others. In addition to delivery, installation and maintenance services.</p>
                    <p>We also prioritize social and economic responsibility, aiming to deliver unique services that offer solutions to enhance the quality of life for our customers.</p>
                </div>
                <div class="col-xl-6 wow fadeInRightBig">
                    <img src="{{ asset('assets-frontend/images/about-lsat-banner.png') }}" alt="About Banner">
                </div>
            </div>
        </div>
    </section>
@endsection
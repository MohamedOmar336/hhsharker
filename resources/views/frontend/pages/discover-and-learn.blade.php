@extends('frontend.layouts.app')
@section('content')   



<section class="banner-space discover-banner-section">
    <div class="container">
        <img class="discover-banner-img wow fadeIn" data-wow-delay="1.5s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="discover-banner-text">
            <div class="wow fadeInLeft" data-wow-delay="1.2s">HH shaker</div>
            <div class="wow fadeInRight" data-wow-delay="1.2s">Ultimate Guide</div>
            <div class="wow fadeInLeft" data-wow-delay="1.2s">for you</div>
        </div>
        <div class="discover-banner-bottom-text wow fadeInLeft" data-wow-delay="1.2s">
            <h3><span class="numberanimation">32</span>+</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna </p>
        </div>
    </div>
</section>


<section class="disc-mainte-section">
    <div class="container">
        <div class="maint-h-row">
            <h2 class="wow fadeInLeft">Maintenance Tips</h2>
            <a class="mainte-head-a wow fadeInRight" href="discover-view-all.html">View all</a>
        </div>

        <div class="maint-list-div">
            <div class="row g-lg-5 g-2">
                <div class="col-lg-2 wow fadeInLeft">
                    <h3>Tips 01</h3>
                </div>
                <div class="col-lg-4 wow fadeInLeft">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <h4>Lorem ipsum dolor sit amet consectetur</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet
                        lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae
                        magna </p>
                    <a href="discover-and-learn-single.html">Read Now</a>
                </div>
            </div>
            <div class="row g-lg-5 g-2">
                <div class="col-lg-2 wow fadeInLeft">
                    <h3>Tips 01</h3>
                </div>
                <div class="col-lg-4 wow fadeInLeft">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <h4>Lorem ipsum dolor sit amet consectetur</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet
                        lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae
                        magna </p>
                    <a href="discover-and-learn-single.html">Read Now</a>
                </div>
            </div>
            <div class="row g-lg-5 g-2">
                <div class="col-lg-2 wow fadeInLeft">
                    <h3>Tips 01</h3>
                </div>
                <div class="col-lg-4 wow fadeInLeft">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <h4>Lorem ipsum dolor sit amet consectetur</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet
                        lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae magna Lorem ipsum dolor sit amet consectetur. Ornare ipsum arcu suspendisse amet lacus. At commodo tempus fusce diam odio dignissim. Orci diam sed vitae
                        magna </p>
                    <a href="discover-and-learn-single.html">Read Now</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="disco-look-section">
    <div class="container-fluid pe-0">
        <h2 class="wow fadeInLeft">A look into the future</h2>
        <div class="disco-look-sldier wow fadeInUp">
            <div class="owl-carousel owl-theme" id="look-future-sldier">
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                    <h3>Lorem ipsum dolor sit </h3>
                    <p>2024</p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                    <h3>Lorem ipsum dolor sit </h3>
                    <p>2024</p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                    <h3>Lorem ipsum dolor sit </h3>
                    <p>2024</p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                    <h3>Lorem ipsum dolor sit </h3>
                    <p>2024</p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets-frontend/images/blog-img-1.png')}}">
                    <h3>Lorem ipsum dolor sit </h3>
                    <p>2024</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 wow fadeInLeft">
                <div class="news-list-btn-col">
                    <div>
                        <div class="section-heading">
                            <h2>Faqs </h2>
                        </div>

                        <div class="news-tab-btn-div" id="nav-tab" role="tablist">
                            <button class=" active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All</button>
                            <button class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Popular</button>
                            <button class="" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">New</button>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. Ut phasellus arcu
                            est sollicitudin malesuada morbi sit.</p>
                        <a class="cutome-btn green-custome-btn" href="discover-view-all.html">Load More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 wow fadeInRight">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="news-scroll-list">
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="news-scroll-list">
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <div class="news-scroll-list">
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-list-main-div">
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                                <div class="news-list-tab">
                                    <img src="{{ asset('assets-frontend/images/upp-img-1.png')}}" alt="New Image">
                                    <div>
                                        <h3>Lorem ipsum dolor sit amet consectetur. </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat.
                                            Ut phasellus arcu est sollicitudin malesuada morbi sit.</p>
                                        <span>May 14, 2024</span>
                                        <a class="btn-a" href="discover-and-learn-single.html">Read Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
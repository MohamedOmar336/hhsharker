@extends('frontend.layouts.app')
@section('content')

    <section class="banner-space founders-banner">
        <div class="container">
            <div class="section-heading text-center wow fadeInDownBig">
                <h5>Founders</h5>
                <h2>Company founders</h2>
            </div>
            <div class="row justify-content-center mt-lg-5">
                <div class="col-md-6 col-lg-5 col-xl-4 wow fadeInLeftBig">
                    <div class="founder-list-div">
                        <img src="{{ asset('assets-frontend/images/founders-1.png') }}" alt="Founders Images">
                        <div>
                            <h5>Hassan Shaker</h5>
                            <p>CEO H&H Shaker</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 wow fadeInRightBig">
                    <div class="founder-list-div">
                        <img src="{{ asset('assets-frontend/images/founders-2.png') }}" alt="Founders Images">
                        <div>
                            <h5>Hussein Shaker</h5>
                            <p>CHAIRMAN</p>
                        </div>
                    </div>
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

    <section class="p-founder-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInLeftBig">
                    <div class="section-heading">
                        <h2>founders</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 wow fadeInRightBig">
                    <div class="founders-p-div">
                        <p>Hussein & Al-Hassan G. Shaker Bros. Modern Trading Co. LTD., was established as a true representation of a long history and a distinguished reputation held by the Shaker family. Since its establishment in 1950 by Sheikh Ibrahim
                            Shaker.
                        </p>
                        <p>The HH Shaker Company has been and continues to pioneer the air conditioning and home appliances industry in the Kingdom of Saudi Arabia. It is also the exclusive importer and distributor of many leading international brands, including
                            Midea and Beko.</p>
                        <p>Thanks to its founders, the company has maintained its growing path at a steady and clear pace over the years, until it has become a distinguished brand and a prominent address in marketing home appliances and air conditioners.
                            It is famous for providing services at the highest levels of quality and efficiency in the Kingdom.</p>
                        <p>Thanks to its success and distinction, Shaker Group listed the company's shares in the Saudi market to achieve further growth and expansion.  The Shaker group includes a strong network of branches, service centers, and exclusive
                            sales outlets, including modern retail through specialized retail partners.</p>
                        <p>Hence, HUSSEIN & AL-HASSAN G. SHAKER BROS is considered a leading and innovative group in the home appliances and air conditioning solutions market, constantly keen to serve consumers with the highest quality and satisfaction standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
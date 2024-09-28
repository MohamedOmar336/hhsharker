@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space sing-disc-banner-section">
    <div class="container">
        <div class="disciver-sing-banner wow fadeInRight" data-wow-delay="1.2s">
            <img src="{{ asset('assets-frontend/images/blog-img-1.png') }}">
        </div>
        <div class="row gx-lg-5 g-2">
            <div class="col-lg-8 col-xl-8 wow fadeInLeft" data-wow-delay="0.5s">
                <h1 class="disc-sing-h1-heading">Lorem ipsum dolor sit amet consectetur</h1>
            </div>
            <div class="col-lg-7 col-xl-8 wow fadeInLeft">
                <div class="disc-sing-p-div">
                    <p>Hussein & Al-Hassan G. Shaker Bros. Modern Trading Co. LTD., was established as a true representation of a long history and a distinguished reputation held by the Shaker family. Since its establishment in 1950 by Sheikh Ibrahim
                        Shaker.
                    </p>
                    <p>The HH Shaker Company has been and continues to pioneer the air conditioning and home appliances industry in the Kingdom of Saudi Arabia. It is also the exclusive importer and distributor of many leading international brands, including
                        Midea and Beko.</p>
                    <p>Thanks to its founders, the company has maintained its growing path at a steady and clear pace over the years, until it has become a distinguished brand and a prominent address in marketing home appliances and air conditioners.
                        It is famous for providing services at the highest levels of quality and efficiency in the Kingdom.</p>
                    <p>Thanks to its success and distinction, Shaker Group listed the company's shares in the Saudi market to achieve further growth and expansion.<br> The Shaker group includes a strong network of branches, service centers, and exclusive
                        sales outlets, including modern retail through specialized retail partners.</p>
                    <p>Hence, HUSSEIN & AL-HASSAN G. SHAKER BROS is considered a leading and innovative group in the home appliances and air conditioning solutions market, constantly keen to serve consumers with the highest quality and satisfaction standards.</p>
                    <p>Hussein & Al-Hassan G. Shaker Bros. Modern Trading Co. LTD., was established as a true representation of a long history and a distinguished reputation held by the Shaker family. Since its establishment in 1950 by Sheikh Ibrahim
                        Shaker.
                    </p>
                    <p>The HH Shaker Company has been and continues to pioneer the air conditioning and home appliances industry in the Kingdom of Saudi Arabia. It is also the exclusive importer and distributor of many leading international brands, including
                        Midea and Beko.</p>
                    <p>Thanks to its founders, the company has maintained its growing path at a steady and clear pace over the years, until it has become a distinguished brand and a prominent address in marketing home appliances and air conditioners.
                        It is famous for providing services at the highest levels of quality and efficiency in the Kingdom.</p>
                    <p>
                        Thanks to its success and distinction, Shaker Group listed the company's shares in the Saudi market to achieve further growth and expansion.<br> The Shaker group includes a strong network of branches, service centers, and exclusive
                        sales outlets, including modern retail through specialized retail partners.
                    </p>
                    <p>Hence, HUSSEIN & AL-HASSAN G. SHAKER BROS is considered a leading and innovative group in the home appliances and air conditioning solutions market, constantly keen to serve consumers with the highest quality and satisfaction standards.</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 wow fadeInRight">
                <div class="disc-sing-serach">
                    <div class="serach-icon-div">
                        <img class="s-icon" src="{{ asset('assets-frontend/images/search-icon.svg') }}">
                        <form>
                            <input class="form-control" type="text" placeholder="Search">
                        </form>
                    </div>
                </div>
                <div class="sing-tag-div">
                    <h3>Tags</h3>
                    <div class="sing-tag-list">
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Refrigerator</a>
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Dishwashers</a>
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Washing machine</a>
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Cookers</a>
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Coffee Machines</a>
                        <a href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Appliances</a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur. Quisque pellentesque tortor velit nisl quisque pellentesque facilisis. Orci quis arcu felis faucibus non rutrum. Mi amet enim velit egestas cras pharetra egestas erat. Ut phasellus arcu est sollicitudin malesuada
                        morbi sit.
                    </p>
                    <a class="cutome-btn green-custome-btn" href="{{ route('frontend.discover-all',['locale' => app()->getLocale()]) }}">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
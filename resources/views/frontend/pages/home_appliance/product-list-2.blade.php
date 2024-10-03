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
            <a class="cutome-btn wow fadeInUp" data-wow-delay="0.5s" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">Learn More</a>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

@if(count($homeApplianceArr) > 0)
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
                @foreach($homeApplianceArr as $hac)
                    <button class="nav-link {{ $loop->iteration == 1 ? 'active' : '' }} " id="list_pro_tab_{{ $loop->iteration }}-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_{{ $loop->iteration }}" type="button" role="tab" aria-controls="list_pro_tab_{{ $loop->iteration }}" aria-selected="true">{{ $hac->name }}</button>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($homeApplianceArr as $hac)
                    <div class="tab-pane fade {{ $loop->iteration == 1 ? 'show active' : '' }} " id="list_pro_tab_{{ $loop->iteration }}" role="tabpanel" aria-labelledby="list_pro_tab_{{ $loop->iteration }}-tab" tabindex="0">

                        @if($hac->children->count() > 0)
                        <ul class="nav nav-pills inner-tab-pill mb-5" id="pills-tab-inner" role="tablist">
                            <button class="nav-link active" id="innter_list_{{ $hac->id }}_1-tab" data-bs-toggle="pill" data-bs-target="#innter_list_{{ $hac->id }}_1" type="button" role="tab" aria-controls="innter_{{ $hac->id }}_list_1" aria-selected="true">All Products</button>

                            @foreach($hac->children as $subcat)
                                <button class="nav-link" id="innter_list_{{ $hac->id }}_{{ $loop->iteration+1 }}-tab" data-bs-toggle="pill" data-bs-target="#innter_list_{{ $hac->id }}_{{ $loop->iteration+1 }}" type="button" role="tab" aria-controls="innter_list_{{ $hac->id }}_{{ $loop->iteration+1 }}" aria-selected="false">{{ $subcat->name}}</button>
                            @endforeach
                            
                        </ul>
                        @endif
                        <div class="tab-content" id="pills-tabContent-inner">

                            <div class="tab-pane fade show active" id="innter_list_{{ $hac->id }}_1" role="tabpanel" aria-labelledby="innter_list_{{ $hac->id }}_1-tab" tabindex="0">
                                <div class="row g-3 g-lg-4">

                                    @php
                                        $allProductArr = $hac->getHomeApplienceProductByCateories($hac->name_en,'all');
                                    @endphp

                                    @forelse($allProductArr as $product)                                      
                                        @include('frontend.pages.product.product-component',compact('product'))                                       
                                    @empty
                                        <p class="nodata-found">No Products Found</p>
                                    @endforelse 

                                </div>
                            </div>

                            @foreach($hac->children as $subcat)
                                <div class="tab-pane fade" id="innter_list_{{ $hac->id }}_{{ $loop->iteration+1 }}" role="tabpanel" aria-labelledby="innter_list_{{ $hac->id }}_{{ $loop->iteration+1 }}-tab" tabindex="0">
                                    <div class="row g-3 g-lg-4">

                                        @php
                                            $allProductArr = $hac->getHomeApplienceProductByCateories($hac->name_en,$subcat->name_en);
                                        @endphp

                                        @forelse($allProductArr as $product)                                      
                                            @include('frontend.pages.product.product-component',compact('product'))                                       
                                        @empty
                                            <p class="nodata-found">No Products Found</p>
                                        @endforelse 

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endif

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
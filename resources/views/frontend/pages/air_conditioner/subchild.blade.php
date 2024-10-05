@extends('frontend.layouts.app')
@section('content')
<section class="banner-space winlist-banner-section wow fadeIn">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="1.2s">
                <h1>{{ $childCategoryArr->name }} {{ $subChildCategoryArr->name}}<br> {{ $parentCategoryArr->name }}</h1>
                <a class="cutome-btn" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">Learn More</a>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="1.2s">
                <img class="list-banner-img" src="{{ asset('images/'.$childCategoryArr->image) }}" alt="Banner Image">
            </div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="1.2s">
                <div class="grid-banner-list">
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}"> Ultra-Quiet Operation
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}"> Energy Saving<br> Inverter Tech
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}"> Smart Control
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight">

            </div>
        </div>

    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')

@if(count($subSubChildCategoryArr) > 0)
<section class="prod-list-section">
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

        <div class="mt-4 wow fadeInUp">
            <ul class="nav nav-pills home-tab-main mb-5" id="pills-tab" role="tablist">
                @foreach($subSubChildCategoryArr as $subCat)
                    <button class="nav-link {{ $loop->iteration == 1 ? 'active' : '' }}" id="list_pro_tab_{{ $loop->iteration }}-tab" data-bs-toggle="pill" data-bs-target="#list_pro_tab_{{ $loop->iteration }}" type="button" role="tab" aria-controls="list_pro_tab_{{ $loop->iteration }}" aria-selected="true">{{  $subCat->name }}</button>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($subSubChildCategoryArr as $subCat)
                <div class="tab-pane fade {{ $loop->iteration == 1 ? 'show active' : '' }} " id="list_pro_tab_{{ $loop->iteration }}" role="tabpanel" aria-labelledby="list_pro_tab_{{ $loop->iteration }}-tab" tabindex="0">
                    <ul class="nav nav-pills inner-tab-pill mb-5" id="pills-tab-inner" role="tablist">
                        <button class="nav-link active" id="innter_list_{{$loop->iteration}}_1-tab" data-bs-toggle="pill" data-bs-target="#innter_list_{{$loop->iteration}}_1" type="button" role="tab" aria-controls="innter_list_{{$loop->iteration}}_1" aria-selected="true">All Products</button>
                        <button class="nav-link" id="innter_list_{{$loop->iteration}}_2-tab" data-bs-toggle="pill" data-bs-target="#innter_list_{{$loop->iteration}}_2" type="button" role="tab" aria-controls="innter_list_{{$loop->iteration}}_2" aria-selected="false">Cool Only</button>
                        <button class="nav-link" id="innter_list_{{$loop->iteration}}_3-tab" data-bs-toggle="pill" data-bs-target="#innter_list_{{$loop->iteration}}_3" type="button" role="tab" aria-controls="innter_list_{{$loop->iteration}}_3" aria-selected="false">Heat & Cold</button>
                    </ul>
                    <div class="tab-content" id="pills-tabContent-inner">
                        <div class="tab-pane fade show active" id="innter_list_{{$loop->iteration}}_1" role="tabpanel" aria-labelledby="innter_list_{{$loop->iteration}}_1-tab" tabindex="0">
                            <div class="row g-3 g-lg-4">
                                @forelse($allProductArr as $product)
                                    @if($product->child == $subCat->name_en)
                                        @include('frontend.pages.product.product-component',compact('product'))
                                    @endif
                                @empty
                                    <p class="nodata-found">No Products Found</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="tab-pane fade" id="innter_list_{{$loop->iteration}}_2" role="tabpanel" aria-labelledby="innter_list_{{$loop->iteration}}_2-tab" tabindex="0">
                            @forelse($coolOnlyProductArr as $product)
                                @if($product->child == $subCat->name_en)
                                    @include('frontend.pages.product.product-component',compact('product'))
                                @endif
                            @empty
                                <p class="nodata-found">No Products Found</p>
                            @endforelse
                        </div>
                        <div class="tab-pane fade" id="innter_list_{{$loop->iteration}}_3" role="tabpanel" aria-labelledby="innter_list_{{$loop->iteration}}_3-tab" tabindex="0">
                            @forelse($heatCoolProductArr as $product)
                                @if($product->child == $subCat->name_en)
                                    @include('frontend.pages.product.product-component',compact('product'))
                                @endif
                            @empty
                                <p class="nodata-found">No Products Found</p>
                            @endforelse
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@else
<p class="nodata-found">No Products Found</p>
@endif


<section class="list-hc-section">
    <div class="gal-test-slider wow fadeInDown" data-wow-delay="1s">
        <h2>Galleries</h2>
    </div>
    <div class="container">
        <h2 class="list-hc-heading wow fadeInUp">HAPPY CUSTOMERS</h2>
        <div class="main-list-hc wow fadeInUp" data-wow-delay="0.5s">
            <div class="list-cross-div-1">
                <img class="animate-this" src="{{ asset('assets-frontend/images/list-cross-img-1.png') }}">
            </div>
            <div class="hc-body-div">
                <h3>Photo Capture from our Customers </h3>
                <p>Lorem ipsum dolor sit amet consectetur. Fermentum bibendum id tellus mattis eget at quam ac quam. Id sit vestibulum sodales posuere erat at. </p>
                <img src="{{ asset('assets-frontend/images/list-c-bottom.png') }}">
            </div>
            <div class="list-cross-div-2">
                <img class="animate-this" src="{{ asset('assets-frontend/images/list-cross-img-2.png') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft">
                <div class="hpp-cust-div">
                    <img src="{{ asset('assets-frontend/images/contact-testi-1.png') }}">
                    <img src="{{ asset('assets-frontend/images/contact-testi-2.png') }}">
                    <img src="{{ asset('assets-frontend/images/contact-testi-4.png') }}">
                </div>

            </div>
            <div class="col-lg-4 wow fadeInRight">
                <p class="p-grey-color">
                    Lorem ipsum dolor sit amet consectetur. Fermentum bibendum id tellus mattis eget at quam ac quam. Id sit vestibulum sodales posuere erat at.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="list-last-b-section">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>view other Products</h2>
        </div>
        <div class="row mt-lg-5 mt-3 gx-lg-5">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="list-other-div">
                    <h3>Concealed Splits</h3>
                    <p>Enjoy air distribution in all directions and 360° coverage.</p>
                    <a class="cutome-btn" href="{{ route('frontend.air-conditioner.concealed-list',['locale' => app()->getLocale()]) }}">Learn More</a>
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="list-other-div">
                    <h3>Floor Standing Splits</h3>
                    <p>Enjoy air distribution in all directions and 360° coverage.</p>
                    <a class="cutome-btn" href="{{ route('frontend.air-conditioner.concealed-list',['locale' => app()->getLocale()]) }}">Learn More</a>
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@extends('frontend.layouts.app')
@section('content')
<section class="banner-space winlist-banner-section wow fadeIn">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="1.2s">
                <h1>{{ $childCategoryArr->name }} <br> {{ $parentCategoryArr->name }}</h1>
                <a class="cutome-btn" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}">{{ __('website.air_conditioner.btn') }}</a>
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
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}"> {!! __('website.air_conditioner.sub_child_title_1') !!}
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}"> {!! __('website.air_conditioner.sub_child_title_2') !!}
                        </div>
                        <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                    </div>
                    <div class="col-baaner-list">
                        <div class="icon-banner">
                            <img src="{{ asset('assets-frontend/images/check-icon.svg') }}">{!! __('website.air_conditioner.sub_child_title_3') !!}
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


<section class="prod-list-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="section-heading">
                    <h2>{!! __('website.air_conditioner.all_product') !!}</h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="list-serach-div">
                    <button class="serch-filter-btn"><img src="{{ asset('assets-frontend/images/filter-icon.png') }}"></button>
                    <div class="serach-icon-div">
                        <img class="s-icon" src="{{ asset('assets-frontend/images/search-icon.svg') }}">
                        <form>
                            <input class="form-control" type="text" placeholder="{!! __('website.air_conditioner.search_product') !!}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 wow fadeInUp">
            <ul class="nav nav-pills inner-tab-pill mt-5 mb-5" id="pills-tab-inner" role="tablist">
                <button class="nav-link active" id="innter_list_1-tab" data-bs-toggle="pill" data-bs-target="#innter_list_1" type="button" role="tab" aria-controls="innter_list_1" aria-selected="true">All Products</button>
                <button class="nav-link" id="innter_list_2-tab" data-bs-toggle="pill" data-bs-target="#innter_list_2" type="button" role="tab" aria-controls="innter_list_2" aria-selected="false">Cool Only</button>
                <button class="nav-link" id="innter_list_3-tab" data-bs-toggle="pill" data-bs-target="#innter_list_3" type="button" role="tab" aria-controls="innter_list_3" aria-selected="false">Heat & Cold</button>
            </ul>
            <div class="tab-content" id="pills-tabContent-inner">
                <div class="tab-pane fade show active" id="innter_list_1" role="tabpanel" aria-labelledby="innter_list_1-tab" tabindex="0">
                    <div class="row g-3 g-lg-4">
                        @forelse($allProductArr as $product)
                            @include('frontend.pages.product.product-component',compact('product'))
                        @empty
                            <p class="nodata-found">No Products Found</p>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="innter_list_2" role="tabpanel" aria-labelledby="innter_list_2-tab" tabindex="0">
                    <div class="row g-3 g-lg-4">
                        @forelse($coolOnlyProductArr as $product)
                            @include('frontend.pages.product.product-component',compact('product'))
                        @empty
                            <p class="nodata-found">No Products Found</p>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="innter_list_3" role="tabpanel" aria-labelledby="innter_list_3-tab" tabindex="0">
                    <div class="row g-3 g-lg-4">
                        @forelse($heatCoolProductArr as $product)
                            @include('frontend.pages.product.product-component',compact('product'))
                        @empty
                            <p class="nodata-found">No Products Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="list-hc-section">
    <div class="gal-test-slider wow fadeInDown" data-wow-delay="1s">
        <h2>{!! __('website.air_conditioner.galleries') !!}</h2>
    </div>
    <div class="container">
        <h2 class="list-hc-heading wow fadeInUp">{!! __('website.air_conditioner.happy_customer') !!}</h2>
        <div class="main-list-hc wow fadeInUp" data-wow-delay="0.5s">
            <div class="list-cross-div-1">
                <img class="animate-this" src="{{ asset('assets-frontend/images/list-cross-img-1.png') }}">
            </div>
            <div class="hc-body-div">
                <h3>{!! __('website.air_conditioner.happy_customer_desc_1') !!} </h3>
                <p>{!! __('website.air_conditioner.happy_customer_desc_2') !!}</p>
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
                    {!! __('website.air_conditioner.happy_customer_desc') !!}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="list-last-b-section">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>{!! __('website.air_conditioner.view_other_product') !!}</h2>
        </div>
        <div class="row mt-lg-5 mt-3 gx-lg-5">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="list-other-div">
                    <h3>{!! __('website.air_conditioner.vop_title_1') !!}</h3>
                    <p>{!! __('website.air_conditioner.vop_desc_1') !!}</p>
                    <a class="cutome-btn" href="{{ route('frontend.air-conditioner.concealed-list',['locale' => app()->getLocale()]) }}">{!! __('website.air_conditioner.btn') !!}</a>
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="list-other-div">
                    <h3>{!! __('website.air_conditioner.vop_title_2') !!}</h3>
                    <p>{!! __('website.air_conditioner.vop_desc_2') !!}</p>
                    <a class="cutome-btn" href="{{ route('frontend.air-conditioner.concealed-list',['locale' => app()->getLocale()]) }}">{!! __('website.air_conditioner.btn') !!}</a>
                    <img src="{{ asset('assets-frontend/images/gal-slider-1.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
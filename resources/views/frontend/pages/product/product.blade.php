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
                    @if(isset($record->technical_specification) && $record->technical_specification)
                        <a href="{{ $record->technical_specification }}"><img src="{{ asset('assets-frontend/images/clipboard-icon-1.svg') }}">Technical Specification</a>
                    @endif
                    @if(isset($record->saso) && $record->saso)
                        <a href="{{ $record->saso }}"><img src="{{ asset('assets-frontend/images/clipboard-icon-2.svg') }}">SASO Certificate</a>
                    @endif

                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="1.2s">
                <h1 class="single-main-heading">
                    {{ $record['product_name_' . app()->getLocale()] }}
                </h1>
                {{-- @dd($record , $record->children) --}}
                <div class="sing-tag-main">
                    @foreach ($record->children as $child )
                        <h5>{{ $child->model_number }}</h5>
                    @endforeach
                    <div>
                        {{ isset($record->product_option_title) ? $record->product_option_title : ''  }}:
                        <select class="form-select">
                            @foreach ($record->children as $child )
                                <option value="1">{{ $child->product_option_list }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="scroll-sing-main">
                    <div class="sing-scroll-div">
                        <div class="sing-color-box">
                            <h5 class="singel-inner-h5">Features:</h5>

                            @php
                                $features = is_array($record['feature_' . app()->getLocale()]) ? $record['feature_' . app()->getLocale()] : json_decode($record['feature_' . app()->getLocale()], true);
                            @endphp

                            @if (!empty($features))
                                @foreach ($features as $feature)
                                    <div class="list-sing-div">
                                        <span class="sing-icon-span">
                                            {{-- Replace the image path with the actual icon if needed --}}
                                            <img src="{{ asset('assets-frontend/images/sing-icon-1.png') }}">
                                        </span>
                                        <div>
                                            <h6>{{ $feature['title'] ?? 'Feature Title' }}</h6>
                                            <p>{{ $feature['description'] ?? 'Feature description not available.' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No features available.</p>
                            @endif
                        </div>
                        @php
                            $characteristics = is_array($record['characteristics_' . app()->getLocale()]) ? $record['characteristics_' . app()->getLocale()] : json_decode($record['characteristics_' . app()->getLocale()], true);
                        @endphp
                        <h5 class="singel-inner-h5">Characteristics:</h5>
                        <div class="charec-list-div">
                            @if (!empty($characteristics))
                                @foreach ($characteristics as $characteristic)
                                    <div>
                                        <span class="sing-icon-span"><img src="{{ asset('assets-frontend/images/sing-icon-4.png')}}"></span>
                                        <p>{{ $characteristic['title'] ?? 'Characteristic Title' }}</p>
                                    </div>
                                @endforeach
                            @else
                                <p>No features available.</p>
                            @endif
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
                @foreach ($relatedProducts as $relatedProduct )
                    <div class="item">
                        <div class="inner-list-div">
                            <img src="{{ asset('assets-frontend/images/inner-prod-1.png')}}">
                            <div class="innter-body-text">
                                <h3>{{ $relatedProduct['product_name_' . app()->getLocale()] }}</h3>

                                @foreach ($relatedProduct->children as $index => $child)
                                    @break($index == 4)  {{-- Breaks the loop after 5 iterations --}}
                                    <p>{{ $child->model_number }}</p>
                                @endforeach

                                <div>
                                    @php
                                        $features = is_array($relatedProduct['feature_' . app()->getLocale()]) ? $relatedProduct['feature_' . app()->getLocale()] : json_decode($relatedProduct['feature_' . app()->getLocale()], true);
                                    @endphp
                                    @foreach ($features as $index => $feature)
                                        @break($index == 4)  {{-- Breaks the loop after 5 iterations --}}
                                         <span>{{ $feature['title'] }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('frontend.product.page', ['locale' => app()->getLocale(), 'id' => $relatedProduct->id]) }}">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

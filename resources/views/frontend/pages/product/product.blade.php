@extends('frontend.layouts.app')
@section('content')
<section class="banner-space single-main-banner wow fadeIn">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="1.2s">
                {{-- <img class="single-main-img" src="{{ Storage::url($record->product_image); }}"> --}}
                <img class="single-main-img" src="{{ isset($record->product_image) ?  Storage::url($record->product_image) : asset('assets-frontend/images/inner-prod-1.png')}}">

                <div class="sing-btn-main">
                    <a class="sing-btn-1" href="#" data-bs-toggle="modal" data-bs-target="#requestaquotemodal">Request a Quote</a>
                    <a class="sing-btn-2" href="#" data-bs-toggle="modal" data-bs-target="#contactselesmodal">Contact Sales</a>
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
                    <div class="sing-green-div">
                        @foreach ($record->children as $child )
                            <h5>{{ $child->model_number }}</h5>
                        @endforeach
                    </div>
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
                                            <h6>{{ $feature['title'] ?? ''}}</h6>
                                            <p>{{ $feature['description'] ?? '' }}</p>
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
                                        <p>{{ $characteristic['title'] ?? '' }}</p>
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
                            <img src="{{ $relatedProduct->product_image  }}">
                            <div class="innter-body-text">
                                <h3>{{ $relatedProduct->name }}</h3>

                                @if(isset($record->children[0]->model_number))
                                    <p>{{ $record->children[0]->model_number }}</p>
                                @endif

                                <div>
                                    @foreach (array_slice($record->features,0,4) as $index => $feature)
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




<!-- Request a Quote Modal -->
<div class="modal fade sing-contat-modal" id="requestaquotemodal" tabindex="-1" aria-labelledby="requestaquotemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></a>
                <h3>Request a Quote</h3> 
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Your Name <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Your Company <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Mobile Number <span>*</span></label>
                                <input type="tel" class="form-control" placeholder="Your Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Email Address <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>City <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your City">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>District <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your District">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Product Category <span>*</span></label>
                                <select class="form-select form-control">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Subject <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-input">
                                <label>Message <span>*</span></label>
                                <textarea class="form-control" placeholder="Type Something" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="contact-form-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Contact Sales Modal -->
<div class="modal fade sing-contat-modal" id="contactselesmodal" tabindex="-1" aria-labelledby="contactselesmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></a>
                <h3>Contact Sales</h3> 
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Your Name <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Your Company <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Mobile Number <span>*</span></label>
                                <input type="tel" class="form-control" placeholder="Your Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Email Address <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>City <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your City">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>District <span>*</span></label>
                                <input type="email" class="form-control" placeholder="Your District">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Product Category <span>*</span></label>
                                <select class="form-select form-control">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-input">
                                <label>Subject <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-input">
                                <label>Message <span>*</span></label>
                                <textarea class="form-control" placeholder="Type Something" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="contact-form-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
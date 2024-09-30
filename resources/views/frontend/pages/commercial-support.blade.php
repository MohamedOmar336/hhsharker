@extends('frontend.layouts.app')
@section('content')  
<section class="banner-space commr-banner-section">
    <div class="container">
        <img class="support-banner-img-1 wow zoomInRight" data-wow-delay="1.7s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="support-banner-text">
            <div class="wow fadeInLeft" data-wow-delay="1.2s">HH Shaker Customer</div>
            <div class="wow fadeInRight" data-wow-delay="1.2s">Service Ready</div>
            <div class="wow fadeInUp" data-wow-delay="1.2s">To Help</div>
        </div>
        <img class="support-banner-img-2 wow zoomInLeft" data-wow-delay="1.3s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="row commes-p-text-div">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.5s">
                <p>Lorem ipsum dolor sit amet consectetur. Tempor pellentesque viverra malesuada tempor sollicitudin. Orci egestas at feugiat quam pretium faucibus elementum. Venenatis magnis pretium donec interdum. Mi magna vitae consectetur lectus
                    leo.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end wow fadeInRight" data-wow-delay="0.5s">
                <a class="cutome-btn green-custome-btn " href="#">Send a Messages</a>
            </div>
        </div>
    </div>
</section>


@include('frontend.layouts.includes.common_slider_1')


<section class="support-form-section wow fadeInUp">
    <div class="container">
        <div class="row mb-4 mb-lg-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-8">
                <div class="section-heading section-p-heading">
                    <h5>CAC</h5>
                    <h2>Need help with your recent product purchase, replacement parts, or installation?</h2>
                    <p>Our Customer Service team is here for you! Feel free to reach out with any questions or concerns you may have.</p>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills home-tab-main mb-4 mb-lg-5 wow fadeInUp" data-wow-delay="0.4s" id="pills-tab" role="tablist">
            <button class="nav-link active" id="commercial_form_1-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_1" type="button" role="tab" aria-controls="commercial_form_1" aria-selected="true">WhatsApp</button>
            <button class="nav-link" id="commercial_form_1-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_1" type="button" role="tab" aria-controls="commercial_form_1" aria-selected="false">Sales</button>
            <button class="nav-link" id="commercial_form_1-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_1" type="button" role="tab" aria-controls="commercial_form_1" aria-selected="false">Find the Service Center</button>
        </ul>
        <div class="tab-content wow fadeInUp" id="pills-tabContent" data-wow-delay="0.6s">
            <div class="tab-pane fade show active" id="commercial_form_1" role="tabpanel" aria-labelledby="commercial_form_1-tab" tabindex="0">
                <div class="contact-tab-body">
                    <form id="contact-frm" method="post" action="{{ route('frontend.contact-us.store',['locale' => app()->getLocale()]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Your Company <span>*</span></label>
                                    <input type="text" name="company" class="form-control" placeholder="Company Name" value="{{ old('company') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Mobile Number <span>*</span></label>
                                    <input type="tel" name="mobile_number" class="form-control" placeholder="Your Number" value="{{ old('mobile_number') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Email Address <span>*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>City <span>*</span></label>
                                    <input type="text" name="city" class="form-control" placeholder="Your City" value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>District <span>*</span></label>
                                    <input type="text" name="district" class="form-control" placeholder="Your District" value="{{ old('district') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Product Category <span>*</span></label>
                                    <select name="product_category" class="form-select form-control">
                                        <option selected disabled>Category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>Subject <span>*</span></label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-input">
                                    <label>Message <span>*</span></label>
                                    <textarea name="message" class="form-control" placeholder="Type Something" rows="5">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="contact-form-btn" type="submit">Send to WhatsApp</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            {{-- <div class="tab-pane fade" id="commercial_form_2" role="tabpanel" aria-labelledby="commercial_form_2-tab" tabindex="0">
                <div class="contact-tab-body">
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
            <div class="tab-pane fade" id="commercial_form_3" role="tabpanel" aria-labelledby="commercial_form_3-tab" tabindex="0">
                <div class="contact-tab-body">
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
            </div> --}}
        </div>
    </div>
</section>
@endsection
@extends('frontend.layouts.app')
@section('content')   
<section class="banner-space commr-banner-section">
    <div class="container">
        <img class="support-banner-img-1 wow zoomInRight" data-wow-delay="1.7s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="support-banner-text">
            <div class="wow fadeInLeft" data-wow-delay="1.2s">{{ __('website.sale_and_support.banner_title_1') }}</div>
            <div class="wow fadeInRight" data-wow-delay="1.2s">{{ __('website.sale_and_support.banner_title_2') }}</div>
            <div class="wow fadeInUp" data-wow-delay="1.2s">{{ __('website.sale_and_support.banner_title_3') }}</div>
        </div>
        <img class="support-banner-img-2 wow zoomInLeft" data-wow-delay="1.3s" src="{{ asset('assets-frontend/images/indu-banner-1.png')}}">
        <div class="row commes-p-text-div">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.5s">
                <p>{{ __('website.sale_and_support.description') }}</p>
            </div>
            <div class="col-lg-5 text-lg-end wow fadeInRight" data-wow-delay="0.5s">
                <a class="cutome-btn green-custome-btn" href="#">{{ __('website.sale_and_support.btn_send_message') }}</a>
            </div>
        </div>
    </div>
</section>


<section class="sale-and-support-section bg-none pt-pb-100 wow fadeInUp">
    <div class="container">
        <ul class="nav nav-pills home-tab-main mb-4 mb-lg-5 wow fadeInUp" data-wow-delay="0.4s" id="pills-tab" role="tablist">
            <button class="nav-link active" id="commercial_form_1-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_1" type="button" role="tab" aria-controls="commercial_form_1" aria-selected="true">{{ __('website.sale_and_support.tab.direct_contact') }}</button>
            <button class="nav-link" id="commercial_form_2-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_2" type="button" role="tab" aria-controls="commercial_form_2" aria-selected="false">{{ __('website.sale_and_support.tab.contact_us') }}</button>
            <button class="nav-link" id="commercial_form_3-tab" data-bs-toggle="pill" data-bs-target="#commercial_form_3" type="button" role="tab" aria-controls="commercial_form_3" aria-selected="false">{{ __('website.sale_and_support.tab.find_service_center') }}</button>
        </ul>
        <div class="tab-content wow fadeInUp" id="pills-tabContent" data-wow-delay="0.6s">
            <div class="tab-pane fade show active" id="commercial_form_1" role="tabpanel" aria-labelledby="commercial_form_1-tab" tabindex="0">
                <div class="contact-tab-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.your_name') }} <span>*</span></label>
                                    <input type="text" class="form-control" placeholder="{{ __('website.sale_and_support.form.your_name') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.your_company') }} <span>*</span></label>
                                    <input type="text" class="form-control" placeholder="{{ __('website.sale_and_support.form.your_company') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.mobile_number') }} <span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="{{ __('website.sale_and_support.form.mobile_number') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.email_address') }} <span>*</span></label>
                                    <input type="email" class="form-control" placeholder="{{ __('website.sale_and_support.form.email_address') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.city') }} <span>*</span></label>
                                    <input type="email" class="form-control" placeholder="{{ __('website.sale_and_support.form.city') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.district') }} <span>*</span></label>
                                    <input type="email" class="form-control" placeholder="{{ __('website.sale_and_support.form.district') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.product_category') }} <span>*</span></label>
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
                                    <label>{{ __('website.sale_and_support.form.subject') }} <span>*</span></label>
                                    <input type="text" class="form-control" placeholder="{{ __('website.sale_and_support.form.subject') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-input">
                                    <label>{{ __('website.sale_and_support.form.message') }} <span>*</span></label>
                                    <textarea class="form-control" placeholder="{{ __('website.sale_and_support.form.message') }}" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="contact-form-btn" type="submit">{{ __('website.sale_and_support.form.submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="commercial_form_2" role="tabpanel" aria-labelledby="commercial_form_2-tab" tabindex="0">
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
            </div>
        </div>
    </div>
</section>
@endsection
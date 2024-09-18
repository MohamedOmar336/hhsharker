@extends('frontend.layouts.app')
@section('content')

    <section class="banner-space">
        <div class="container">
            <div class="contact-banner">
                <img class="cc-img-1 wow fadeInLeft" src="{{ asset('assets-frontend/images/contact-testi-1.png') }}" alt="Image">
                <img class="cc-img-2 wow fadeInLeft" data-wow-delay="0.2s" src="{{ asset('assets-frontend/images/value-test-2.png') }}" alt="Image">
                <img class="cc-img-3 wow fadeInLeft" data-wow-delay="0.4s" src="{{ asset('assets-frontend/images/contact-testi-2.png') }}" alt="Image">
                <img class="cc-img-4 wow fadeInRight" data-wow-delay="0.3s" src="{{ asset('assets-frontend/images/contact-testi-3.png') }}" alt="Image">
                <img class="cc-img-5 wow fadeInRight" data-wow-delay="0.5s" src="{{ asset('assets-frontend/images/value-test-5.png') }}" alt="Image">
                <img class="cc-img-6 wow fadeInRight" data-wow-delay="0.7s" src="{{ asset('assets-frontend/images/contact-testi-4.png') }}" alt="Image">
                <h1 class="wow fadeInUp">{!! __('website.contact.title') !!}</h1>
                <a class="cutome-btn green-custome-btn wow fadeInUp" href="#">{{ __('website.contact.button') }}</a>
            </div>
        </div>
    </section>



    <section class="contact-add-section">
        <div class="container">
            <img class="loca-bg-img wow fadeInUp" src="{{ asset('assets-frontend/images/map-pin.png') }}">
            <div class="row loca-add-row">
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>{{ __('website.contact.address_1.city') }}</h4>
                                <p>{{ __('website.contact.address_1.address') }}</p>
                                <span>{{ __('website.contact.address_1.email') }}</span>
                            </div>
                        </div>
                        <a href="#">{{ __('website.contact.address_1.btn') }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>{{ __('website.contact.address_2.city') }}</h4>
                                <p>{{ __('website.contact.address_2.address') }}</p>
                                <span>{{ __('website.contact.address_2.email') }}</span>
                            </div>
                        </div>
                        <a href="#">{{ __('website.contact.address_2.btn') }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>{{ __('website.contact.address_3.city') }}</h4>
                                <p>{{ __('website.contact.address_3.address') }}</p>
                                <span>{{ __('website.contact.address_3.email') }}</span>
                            </div>
                        </div>
                        <a href="#">{{ __('website.contact.address_3.btn') }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>{{ __('website.contact.address_4.city') }}</h4>
                                <p>{{ __('website.contact.address_4.address') }}</p>
                                <span>{{ __('website.contact.address_4.email') }}</span>
                            </div>
                        </div>
                        <a href="#">{{ __('website.contact.address_4.btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 wow fadeInLeftBig">
                    <h2>{{ __('website.contact.form_side_title') }}</h2>
                </div>
                <div class="col-xl-8 wow fadeInRightBig">

                    <div class="contact-btn-tab" id="nav-tab" role="tablist">
                        <button class="tab-btn active" id="contact_1-tab" data-bs-toggle="tab" data-bs-target="#contact_1" type="button" role="tab" aria-controls="contact_1" aria-selected="true">{{ __('website.contact.tab_1') }}</button>
                        <button class="tab-btn" id="contact_2-tab" data-bs-toggle="tab" data-bs-target="#contact_2" type="button" role="tab" aria-controls="contact_2" aria-selected="false">{{ __('website.contact.tab_2') }}</button>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="contact-tab-body tab-pane fade show active" id="contact_1" role="tabpanel" aria-labelledby="contact_1-tab" tabindex="0">
                         <!-- Display success message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Display error message -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif    
                        <form id="contact-frm" method="post" action="{{ route('frontend.contact-us.store',['locale' => app()->getLocale()]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_1') }} <span>*</span></label>
                                            <input type="text" name="name" class="form-control @error('name') error @enderror" placeholder="{{ __('website.contact.field_title_1') }}"  value="{{ old('name') }}">
                                            @error('name')
                                                <label id="name-error" class="error" for="name">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_2') }} <span>*</span></label>
                                            <input type="text" name="company" class="form-control @error('company') error @enderror" placeholder="{{ __('website.contact.field_title_2') }}"  value="{{ old('company') }}">
                                            @error('company')
                                                <label id="company-error" class="error" for="company">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_3') }} <span>*</span></label>
                                            <input type="tel" name="mobile_number" class="form-control @error('mobile_number') error @enderror"  placeholder="{{ __('website.contact.field_title_3') }}"  value="{{ old('mobile_number') }}">
                                            @error('mobile_number')
                                                <label id="mobile_number-error" class="error" for="mobile_number" >{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_4') }} <span>*</span></label>
                                            <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="{{ __('website.contact.field_title_4') }}" value="{{ old('email') }}">
                                            @error('email')
                                                <label id="email-error" class="error" for="email" >{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_5') }} <span>*</span></label>
                                            <input type="text" name="subject" class="form-control  @error('subject') error @enderror" value="{{ old('subject') }}" placeholder="{{ __('website.contact.field_title_5') }}">
                                            @error('subject')
                                                <label id="subject-error" class="error" for="subject">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-input">
                                            <label>{{ __('website.contact.field_title_6') }} <span>*</span></label>
                                            <textarea name="message" class="form-control @error('message') error @enderror"  placeholder="{{ __('website.contact.field_title_6_placeholder') }}" rows="5">{{ old('message') }}</textarea>
                                            @error('message')
                                                <label id="message-error" class="error" for="message">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="contact-form-btn" type="submit">{{ __('website.contact.field_title_7') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-tab-body tab-pane fade" id="contact_2" role="tabpanel" aria-labelledby="contact_2-tab" tabindex="0">
                            <div class="contact-toll-h">
                                <h4>{{ __('website.contact.tab_2') }}</h4>
                                <p>{{ __('website.contact.tab_2_desc') }}</p>
                            </div>
                            <div class="cont-inner-div-list">
                                <div class="cont-tol-list tell-nub">
                                    <img src="{{ asset('assets-frontend/images/call-svg.svg') }}">
                                    <div>
                                        <span>{{ __('website.contact.tab_2_contact') }}</span>
                                        <p>{{ __('website.contact.tab_2_mobile') }}</p>
                                    </div>
                                </div>
                                <div class="cont-tol-list">
                                    <img src="{{ asset('assets-frontend/images/email-svg.svg') }}">
                                    <div>
                                        <span>{{ __('website.contact.tab_2_email') }}</span>
                                        <p>{{ __('website.contact.tab_2_address') }}</p>
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

@push('extra-js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

<script>
$(document).ready(function() {
    $("#contact-frm").validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            company: {
                required: true,
                maxlength: 255
            },
            mobile_number: {
                required: true,
                maxlength: 15,
                digits : true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
                minlength: 2
            },
            message: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            name: {
                required: "{{ __('website.contact.field_1_error_1') }}",
                maxlength: "{{ __('website.contact.field_1_error_2') }}"
            },
            company: {
                required: "{{ __('website.contact.field_2_error_1') }}",
                maxlength: "{{ __('website.contact.field_2_error_2') }}"
            },
            mobile_number: {
                required: "{{ __('website.contact.field_3_error_1') }}",
                digits: "{{ __('website.contact.field_3_error_2') }}",
                maxlength: "{{ __('website.contact.field_3_error_3') }}"
            },
            email: {
                required: "{{ __('website.contact.field_4_error_1') }}",
                email: "{{ __('website.contact.field_4_error_2') }}"
            },
            subject: {
                required: "{{ __('website.contact.field_5_error_1') }}",
                minlength: "{{ __('website.contact.field_5_error_2') }}"
            },
            message: {
                required: "{{ __('website.contact.field_6_error_1') }}",
                minlength: "{{ __('website.contact.field_6_error_2') }}"
            }
        }
    });
});
</script>

@endpush
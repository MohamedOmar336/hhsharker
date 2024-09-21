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
                <h1 class="wow fadeInUp">Say <br> hello to us</h1>
                <a class="cutome-btn green-custome-btn wow fadeInUp" href="#">Send a Messages</a>
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
                                <h4>JEDDAH</h4>
                                <p>Hussein & Al-Hassan G.Shaker Bros. For Modern Trading Co. LTD</p>
                                <span>info@hh-shaker.com.sa</span>
                            </div>
                        </div>
                        <a href="#">Locate Us</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>RIYADH</h4>
                                <p>Hussein & Al-Hassan G.Shaker Bros. For Modern Trading Co. LTD</p>
                                <span>info@hh-shaker.com.sa</span>
                            </div>
                        </div>
                        <a href="#">Locate Us</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>KHOBAR</h4>
                                <p>Hussein & Al-Hassan G.Shaker Bros. For Modern Trading Co. LTD</p>
                                <span>info@hh-shaker.com.sa</span>
                            </div>
                        </div>
                        <a href="#">Locate Us</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="location-add-div">
                        <div class="location-add-inner">
                            <img src="{{ asset('assets-frontend/images/location.svg') }}" alt="Location Icon">
                            <div>
                                <h4>QASSIM</h4>
                                <p>Hussein & Al-Hassan G.Shaker Bros. For Modern Trading Co. LTD</p>
                                <span>info@hh-shaker.com.sa</span>
                            </div>
                        </div>
                        <a href="#">Locate Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 wow fadeInLeftBig">
                    <h2>HH Shaker Customer Service Ready To Help</h2>
                </div>
                <div class="col-xl-8 wow fadeInRightBig">

                    <div class="contact-btn-tab" id="nav-tab" role="tablist">
                        <button class="tab-btn active" id="contact_1-tab" data-bs-toggle="tab" data-bs-target="#contact_1" type="button" role="tab" aria-controls="contact_1" aria-selected="true">Contact Form</button>
                        <button class="tab-btn" id="contact_2-tab" data-bs-toggle="tab" data-bs-target="#contact_2" type="button" role="tab" aria-controls="contact_2" aria-selected="false">Toll Free</button>
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
                        <form id="contact-frm" method="post" action="{{ route('frontend.contact-us.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" class="form-control @error('name') error @enderror" placeholder="Your Name"  value="{{ old('name') }}">
                                            @error('name')
                                                <label id="name-error" class="error" for="name">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>Your Company <span>*</span></label>
                                            <input type="text" name="company" class="form-control @error('company') error @enderror" placeholder="Company Name"  value="{{ old('company') }}">
                                            @error('company')
                                                <label id="company-error" class="error" for="company">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>Mobile Number <span>*</span></label>
                                            <input type="tel" name="mobile_number" class="form-control @error('mobile_number') error @enderror"  placeholder="Your Number"  value="{{ old('mobile_number') }}">
                                            @error('mobile_number')
                                                <label id="mobile_number-error" class="error" for="mobile_number" >{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>Email Address <span>*</span></label>
                                            <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="Your email" value="{{ old('email') }}">
                                            @error('email')
                                                <label id="email-error" class="error" for="email" >{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-input">
                                            <label>Subject <span>*</span></label>
                                            <input type="text" name="subject" class="form-control  @error('subject') error @enderror" value="{{ old('subject') }}" placeholder="Subject">
                                            @error('subject')
                                                <label id="subject-error" class="error" for="subject">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-input">
                                            <label>Message <span>*</span></label>
                                            <textarea name="message" class="form-control @error('message') error @enderror"  placeholder="Type Something" rows="5">{{ old('message') }}</textarea>
                                            @error('message')
                                                <label id="message-error" class="error" for="message">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="contact-form-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-tab-body tab-pane fade" id="contact_2" role="tabpanel" aria-labelledby="contact_2-tab" tabindex="0">
                            <div class="contact-toll-h">
                                <h4>Toll Free</h4>
                                <p>At the core of our company lies a deep commitment to prioritizing our customers, ensuring their needs and satisfaction are our primary focus.</p>
                            </div>
                            <div class="cont-inner-div-list">
                                <div class="cont-tol-list tell-nub">
                                    <img src="{{ asset('assets-frontend/images/call-svg.svg') }}">
                                    <div>
                                        <span>UNIFIED</span>
                                        <p>8002440247</p>
                                    </div>
                                </div>
                                <div class="cont-tol-list">
                                    <img src="{{ asset('assets-frontend/images/email-svg.svg') }}">
                                    <div>
                                        <span>Email</span>
                                        <p>info@hh-shaker.com.sa</p>
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
                required: "Please enter your name",
                maxlength: "Your name must be max 255 characters long"
            },
            company: {
                required: "Please enter your company name",
                maxlength: "Company name must be max 255 characters long"
            },
            mobile_number: {
                required: "Please enter your mobile number",
                digits: "Mobile number must be valid",
                maxlength: "Mobile number must be max 15 digits"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            subject: {
                required: "Please enter the subject",
                minlength: "Subject must be at least 2 characters long"
            },
            message: {
                required: "Please enter a message",
                minlength: "Your message must be at least 10 characters long"
            }
        }
    });
});
</script>

@endpush
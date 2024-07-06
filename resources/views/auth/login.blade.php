<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from mannatthemes.com/metrica/default/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2024 17:47:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>


    <meta charset="utf-8" />
    <title>HH-shaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/IMG_1465.png') }}">
    <style>
        .grecaptcha-badge{
            display: none !important;
        }
    </style>


     <!-- App css -->
     <link href="assets-admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets-admin/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets-admin/css/app.min.css" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet" type="text/css" />
     <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdzcfIpAAAAAHnIw33NCdfQeZTNGCyQx8htUzPN"></script>

</head>

<body id="body" class="auth-page"
    style="background-image: url('assets-admin/images/p-1.png'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;" id="popUpAlert" >
        @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Success:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Add more alert types as needed -->
    </div>
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">

                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="block-body pt-0">
                                    <form class="my-4" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter email">
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="userpassword" placeholder="Enter password">
                                        </div><!--end form-group-->


                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember
                                                        me</label>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-sm-6 text-end">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted font-13">
                                                        <i class="dripicons-lock"></i> {{ __('Forgot password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            {{-- <div class="col-sm-6 text-end">
                                                <a class='text-muted font-13' href='auth-recover-pw.html'><i
                                                        class="dripicons-lock"></i>  {{ __('Forgot password?') }}</a>
                                            </div><!--end col--> --}}
                                        </div><!--end form-group-->
                                        {!! app('captcha')->display() !!}

                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    {!! app('captcha')->renderJs() !!}
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- vendor js -->

    <script src="assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-admin/libs/simplebar/simplebar.min.js"></script>
    <script src="assets-admin/libs/feather-icons/feather.min.js"></script>
    <!-- App js -->
    <script src="assets-admin/js/app.js"></script>
</body>

</html>

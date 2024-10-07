<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>HH-shaker - Confirm Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/IMG_1465.png') }}">

    <!-- App css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    {{-- <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdzcfIpAAAAAHnIw33NCdfQeZTNGCyQx8htUzPN"></script> --}}
</head>

<body id="body" class="auth-page" style="background-image: url('{{ asset('assets/images/p-1.png') }}'); background-size: cover; background-position: center center;">
    <!-- Confirm Password page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="{{ url('/') }}" class="logo logo-admin">
                                        <img src="{{ asset('assets-admin/images/IMG_1520.png') }}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Confirm Password</h4>
                                    <p class="text-muted mb-0">Please confirm your password before continuing.</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="my-4" method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <button class="btn btn-de-primary w-100" type="submit">Confirm Password <i class="fas fa-sign-in-alt ms-1"></i></button>
                                        </div>
                                    </div>
                                </form>

                                @if (Route::has('password.request'))
                                    <div class="mt-3 text-center">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- vendor js -->
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/feather-icons/feather.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets-admin/js/app.js') }}"></script>
</body>

</html>

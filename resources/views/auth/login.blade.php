<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>HH-shaker - Login</title>
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
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdzcfIpAAAAAHnIw33NCdfQeZTNGCyQx8htUzPN"></script>
</head>

<body id="body" class="auth-page" style="background-image: url('{{ asset('assets-admin/images/p-1.png') }}'); background-size: cover; background-position: center center;">
    <!-- Alerts -->
    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;" id="popUpAlert">
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
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="{{ url('/') }}" class="logo logo-admin">
                                        <img src="{{ asset('assets-admin/images/IMG_1520.png') }}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Login to HH-shaker</h4>
                                    <p class="text-muted mb-0">Enter your Email and Password to access your account!</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form class="my-4" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch form-switch-success">
                                                <input class="form-check-input" type="checkbox" id="customSwitchSuccess" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-muted font-13">
                                                    <i class="dripicons-lock"></i> {{ __('Forgot password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    {!! app('captcha')->display() !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-de-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {!! app('captcha')->renderJs() !!}
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

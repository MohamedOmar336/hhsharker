@extends('layouts.app')

@section('content')
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="{{ url('/') }}" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Metrica</h4>   
                                        <p class="text-muted  mb-0">Sign in to continue to Metrica.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                               
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">{{ __('Password') }}</label>                                            
                                            <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password">                            
                                        </div>
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
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
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">{{ __('Log In') }} <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">{{ __("Don't have an account?") }} <a href="{{ route('register') }}" class="text-primary ms-2">{{ __('Free Register') }}</a></p>
                                    </div>
                                    <hr class="hr-dashed mt-4">
                                    <div class="text-center mt-n5">
                                        <h6 class="card-bg px-3 my-4 d-inline-block">{{ __('Or Login With') }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-center mb-1">
                                        <!-- Add your social login buttons here if required -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

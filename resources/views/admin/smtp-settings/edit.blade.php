@extends('admin.layouts.app')

@section('content')
    <!-- Page Content-->
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.smtp_settings') }}</li>
                                <li class="breadcrumb-item active">{{ __('general.edit') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.smtp_settings') }} {{ __('general.edit') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            {{-- @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif --}}
                            <form action="{{ route('smtp-settings.update') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="mail_driver" class="form-label">{{ __('general.mail_driver') }}</label>
                                    <input id="mail_driver" type="text" class="form-control @error('mail_driver') is-invalid @enderror" name="mail_driver" value="{{ old('mail_driver', $settings->mail_driver) }}" required>
                                    @error('mail_driver')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mail_host" class="form-label">{{ __('general.mail_host') }}</label>
                                    <input id="mail_host" type="text" class="form-control @error('mail_host') is-invalid @enderror" name="mail_host" value="{{ old('mail_host', $settings->mail_host) }}" required>
                                    @error('mail_host')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mail_port" class="form-label">{{ __('general.mail_port') }}</label>
                                    <input id="mail_port" type="number" class="form-control @error('mail_port') is-invalid @enderror" name="mail_port" value="{{ old('mail_port', $settings->mail_port) }}" required>
                                    @error('mail_port')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mail_username" class="form-label">{{ __('general.mail_username') }}</label>
                                    <input id="mail_username" type="text" class="form-control @error('mail_username') is-invalid @enderror" name="mail_username" value="{{ old('mail_username', $settings->mail_username) }}" required>
                                    @error('mail_username')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mail_password" class="form-label">{{ __('general.mail_password') }}</label>
                                    <input id="mail_password" type="password" class="form-control @error('mail_password') is-invalid @enderror" name="mail_password" value="{{ old('mail_password', $settings->mail_password) }}" required>
                                    @error('mail_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mail_encryption" class="form-label">{{ __('general.mail_encryption') }}</label>
                                    <input id="mail_encryption" type="text" class="form-control @error('mail_encryption') is-invalid @enderror" name="mail_encryption" value="{{ old('mail_encryption', $settings->mail_encryption) }}">
                                    @error('mail_encryption')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.update') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

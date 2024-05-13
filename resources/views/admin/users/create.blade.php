@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('general.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('users.index') }}">{{ __('general.attributes.users') }}</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{ __('general.attributes.users') }}</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <div class="col-md-12">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">{{ __('general.btn.back') }}</a>
                    </div>
                    <!--end col-->
                </div>
                  <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                                <form id="userForm" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">{{ __('general.attributes.first_name') }}</label>
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                        @error('first_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">{{ __('general.attributes.last_name') }}</label>
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                                        @error('last_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="user_name" class="form-label">{{ __('general.attributes.user_name') }}</label>
                                        <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
                                            name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name">
                                        @error('user_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('general.attributes.email') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">{{ __('general.attributes.phone') }}</label>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone">
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ __('general.attributes.password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">{{ __('general.attributes.confirmation_password') }}</label>
                                        <input id="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                            required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="role_id" class="form-label">{{ __('general.side.roles') }}</label>
                                        <select id="role_id" class="form-control @error('role_id') is-invalid @enderror" name="role_id" required
                                            autocomplete="role_id">
                                            <option value="0">{{ __('general.select.select') }}</option>
                                            @foreach ($roles as $role )
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="active" class="form-label">{{ __('general.attributes.active') }}</label>
                                        <select id="active" class="form-control @error('active') is-invalid @enderror" name="active" required
                                            autocomplete="active">
                                            <option value="1">{{ __('general.select.yes') }}</option>
                                            <option value="0">{{ __('general.select.no') }}</option>
                                        </select>
                                        @error('active')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <x-btn name="{{ __('general.btn.submit') }}"></x-btn>
                                    </div>
                                </form>

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!-- container -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
@endsection

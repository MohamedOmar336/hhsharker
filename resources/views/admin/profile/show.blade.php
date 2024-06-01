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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a
                                        href="{{ url('/profile') }}">{{ __('general.attributes.profile') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('general.side.edit') }}</li>
                            </ol>
                        </div>
                           <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                    <h4 class="page-title">{{ __('general.side.edit') . ' ' }}{{ __('general.attributes.profile') }}</h4>
                    
                </div>
                       </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="met-profile">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                        <div class="met-profile-main">
                                            <div class="met-profile-main-pic">
                                                <img src="{{ Auth::user()->image ? asset('images/' . Auth::user()->image) : asset('assets-admin/images/user.png') }}"
                                                    alt="{{ __('general.attributes.name', ['user_name' => Auth::user()->user_name]) }}"
                                                    height="110" class="rounded-circle">
                                                <span class="met-profile_main-pic-change">
                                                    <i class="fas fa-camera"></i>
                                                </span>
                                            </div>
                                            <div class="met-profile_user-detail">
                                                <h5 class="met-user-name">{{ Auth::user()->user_name }}</h5>

                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-4 ms-auto align-self-center">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class=""><i
                                                    class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b>
                                                    {{ __('general.attributes.phone') }} </b> : {{ Auth::user()->phone }}
                                            </li>
                                            <li class="mt-2"><i
                                                    class="las la-envelope text-secondary font-22 align-middle mr-2"></i>
                                                <b> {{ __('general.attributes.email') }} </b> : {{ Auth::user()->email }}
                                            </li>
                                        </ul>

                                    </div><!--end col-->

                                </div><!--end row-->
                            </div><!--end f_profile-->
                        </div><!--end card-body-->
                        <div class="card-body p-0">
                            <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">{{ __('general.attributes.personal_info') }}
                                                        </h4>
                                                    </div><!--end col-->
                                                </div> <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                        <form action="{{ route('profile.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <!-- First Name -->
                                                    <div class="mb-3">
                                                        <label for="first_name" class="form-label">{{ __('general.attributes.first_name') }}</label>
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control" value="{{ Auth::user()->first_name }}">
                                                    </div>

                                                    <!-- Last Name -->
                                                    <div class="mb-3">
                                                        <label for="last_name" class="form-label">{{ __('general.attributes.last_name') }}</label>
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control" value="{{ Auth::user()->last_name }}">
                                                    </div>

                                                    <!-- Username -->
<div class="mb-3">
    <label for="user_name" class="form-label">{{ __('general.attributes.username') }}</label>
    <input type="text" name="user_name" id="user_name" class="form-control" value="{{ Auth::user()->user_name }}">
</div>


                                                    <!-- Email -->
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control" value="{{ Auth::user()->email }}">
                                                    </div>

                                                    <!-- Phone -->
                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" name="phone" id="phone"
                                                            class="form-control" value="{{ Auth::user()->phone }}">
                                                    </div>

                                                    <!-- Photo -->

                                                    <div class="mb-3">
                                                        <label for="image"
                                                            class="form-label">{{ __('general.attributes.image') }}</label><br>
                                                        <img src="{{ Auth::user()->image ? asset('images/' . Auth::user()->image) : asset('assets-admin/images/user.png') }}"
                                                            alt="{{ Auth::user()->user_name }}" width="100"><br>
                                                        <label for="image" class="form-label mt-2">Update Image</label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image">
                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>


                                
                                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                                </form>



                                            </div>
                                        </div>
                                    </div> <!--end col-->
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">{{ __('general.attributes.change_password') }}</h4>
                                            </div><!--end card-header-->
                                            <div class="card-body">

                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <form method="POST" action="{{ route('profile.change_password') }}">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="current_password"
                                                            class="form-label">{{ __('general.attributes.current_password') }}</label>
                                                        <input id="current_password" type="password"
                                                            class="form-control @error('current_password') is-invalid @enderror"
                                                            name="current_password" required
                                                            autocomplete="current-password"
                                                            value="">
                                                        @error('current_password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="password"
                                                            class="form-label">{{ __('general.attributes.new_password') }}</label>
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="password">
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="password_confirmation"
                                                            class="form-label">{{ __('general.attributes.confirm_new_password') }}</label>
                                                        <input id="password_confirmation" type="password"
                                                            class="form-control" name="password_confirmation" required
                                                            autocomplete="password">
                                                    </div>


                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('general.btn.update') }}</button>


                                                </form>
                                            </div> <!--end card-body-->
                                        </div><!--end card-->

                                    </div> <!--end col-->
                                </div><!--end row-->
                            </div>


                        </div>
                    @endsection

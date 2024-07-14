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
                                <li class="breadcrumb-item"><a href="{{ url('/users') }}"> {{ __('general.attributes.users') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-user') }}</li>
                            </ol>
                        </div>
                         <div class="col-md-12">
                            <a href="{{ URL::previous() }}">
                            @if (app()->isLocale('ar'))
                                <i data-feather="arrow-right-circle"></i> <!-- Arabic locale -->
                            @else
                                <i data-feather="arrow-left-circle"></i> <!-- Default locale -->
                            @endif
                        </a>
                     <h4 class="page-title">{{ __('general.attributes.edit-user') }}</h4>
                </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form id="quickForm" method="POST" action="{{ route('users.update', $record->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">{{ __('general.attributes.first_name') }}</label>
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $record->first_name }}" required autocomplete="first_name" autofocus>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">{{ __('general.attributes.last_name') }}</label>
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $record->last_name }}" required autocomplete="last_name">
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="user_name" class="form-label">{{ __('general.attributes.user_name') }}</label>
                                    <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ $record->user_name }}" required autocomplete="user_name">
                                    @error('user_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('general.attributes.email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $record->email }}" required autocomplete="email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{ __('general.attributes.phone') }}</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $record->phone }}" required autocomplete="phone">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="role_id" class="form-label">{{ __('general.side.roles') }}</label>
                                    <select id="role_id" class="form-control @error('role_id') is-invalid @enderror" name="role_id" required
                                        autocomplete="role_id">
                                        <option value="0">{{ __('general.select.select') }}</option>
                                        @foreach ($roles as $role )
                                            <option value="{{ $role->id }}" {{ $role->id == $record->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="active" class="form-label">{{ __('general.attributes.active') }}</label>
                                    <select id="active" class="form-control @error('active') is-invalid @enderror" name="active" required autocomplete="active">
                                        <option value="1" {{ $record->active ? 'selected' : '' }}>{{ __('general.select.yes') }}</option>
                                        <option value="0" {{ !$record->active ? 'selected' : '' }}>{{ __('general.select.no') }}</option>
                                    </select>
                                    @error('active')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.edit') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->

        </div><!-- container -->
    </div>
@endsection

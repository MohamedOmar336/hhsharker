<!-- resources/views/admin/tags/edit.blade.php -->

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
                                        href="{{ url('/tags') }}">{{ __('general.attributes.tags') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">Edit Tag</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">

                            <form action="{{ route('ticket-priorities.update', $priority->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="Name_en" class="form-label">{{ __('Priority Name (English)') }}</label>
                                    <input id="Name_en" type="text"
                                        class="form-control @error('Name_en') is-invalid @enderror" name="Name_en"
                                        value="{{ old('Name_en', $priority->Name_en) }}" required autofocus>
                                    @error('Name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="Name_ar" class="form-label">{{ __('Priority Name (Arabic)') }}</label>
                                    <input id="Name_ar" type="text"
                                        class="form-control @error('Name_ar') is-invalid @enderror" name="Name_ar"
                                        value="{{ old('Name_ar', $priority->Name_ar) }}" required>
                                    @error('Name_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="Status" class="form-label">{{ __('Status') }}</label>
                                    <select id="Status" class="form-control @error('Status') is-invalid @enderror"
                                        name="Status" required>
                                        <option value="Active"
                                            {{ old('Status', $priority->Status) == 'Active' ? 'selected' : '' }}>
                                            {{ __('Active') }}</option>
                                        <option value="Inactive"
                                            {{ old('Status', $priority->Status) == 'Inactive' ? 'selected' : '' }}>
                                            {{ __('Inactive') }}</option>
                                    </select>
                                    @error('Status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Update Priority') }}</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

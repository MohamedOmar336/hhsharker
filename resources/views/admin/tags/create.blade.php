<!-- resources/views/admin/tags/create.blade.php -->

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
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Tag</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                          <div class="card-body content-area">

                            <form action="{{ route('tags.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name_en" class="form-label">{{ __('Tag Name (English)') }}</label>
                                    <input id="name_en" type="text"
                                        class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                                        value="{{ old('name_en') }}" required autofocus>
                                    @error('name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('Tag Name (Arabic)') }}</label>
                                    <input id="name_ar" type="text"
                                        class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                        value="{{ old('name_ar') }}" required>
                                    @error('name_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Create Tag</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

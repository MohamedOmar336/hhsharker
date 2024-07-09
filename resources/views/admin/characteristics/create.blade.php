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
                                <li class="breadcrumb-item"><a href="{{ url('/characteristics') }}">{{ __('general.attributes.characteristics') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.add-characteristic') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.add-characteristic') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">

                            <form action="{{ route('characteristics.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name_en" class="form-label">{{ __('general.attributes.name_english') }}</label>
                                    <input id="name_en" type="text"
                                        class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                                        value="{{ old('name_en') }}" required autofocus>
                                    @error('name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.name_arabic') }}</label>
                                    <input id="name_ar" type="text"
                                        class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                        value="{{ old('name_ar') }}" required>
                                    @error('name_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image" accept=".svg,.png">
                                    @error('image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('general.btn.create') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

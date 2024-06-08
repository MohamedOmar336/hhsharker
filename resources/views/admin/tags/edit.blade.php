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
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
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

                            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name_en" class="form-label"> <th>{{ __('general.attributes.tag_name_english') }}</th></label>
                                    <input id="name_en" type="text"
                                        class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                                        value="{{ old('name_en', $tag->name_en) }}" required autofocus>
                                    @error('name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.tag_name_arabic') }}</label>
                                    <input id="name_ar" type="text"
                                        class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                        value="{{ old('name_ar', $tag->name_ar) }}" required>
                                    @error('name_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update Tag</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

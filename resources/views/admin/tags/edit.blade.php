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
                        <h4 class="page-title">Edit Tag</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="tag_name_en" class="form-label">{{ __('Tag Name (English)') }}</label>
                                    <input id="tag_name_en" type="text"
                                        class="form-control @error('tag_name_en') is-invalid @enderror" name="tag_name_en"
                                        value="{{ old('tag_name_en', $tag->tag_name_en) }}" required autofocus>
                                    @error('tag_name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tag_name_ar" class="form-label">{{ __('Tag Name (Arabic)') }}</label>
                                    <input id="tag_name_ar" type="text"
                                        class="form-control @error('tag_name_ar') is-invalid @enderror" name="tag_name_ar"
                                        value="{{ old('tag_name_ar', $tag->tag_name_ar) }}" required>
                                    @error('tag_name_ar')
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

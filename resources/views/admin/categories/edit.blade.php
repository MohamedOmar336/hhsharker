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
                                <li class="breadcrumb-item"><a href="{{ url('/categories') }}">{{ __('general.attributes.categories') }}</a></li>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-category') }}</li>
                            </ol>
                        </div>

                          <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                      <h4 class="page-title">{{ __('general.attributes.edit-category') }} </h4>
                </div>


                    </div><!--end page-title-box-->
                </div><!--end col-->

            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="card">
                         <div class="card-body content-area">
                            <form id="quickForm" method="POST" action="{{ route('categories.update', $category->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.name_ar') }}</label>
                                    <input id="name_ar" type="text"
                                        class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                        value="{{ $category->name_ar }}" required autocomplete="name_ar" autofocus>
                                    @error('name_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name_en" class="form-label">{{ __('general.attributes.name_en') }}</label>
                                    <input id="name_en" type="text"
                                        class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                                        value="{{ $category->name_en }}" required autocomplete="name_en">
                                    @error('name_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                    <img src="{{ $record->image ? asset('images/' . $record->image) : asset('assets-admin/images/no_image.png') }}" alt="{{ $category->name }}"
                                        width="100"><br>
                                    <label for="image" class="form-label mt-2">Update Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="parent_id" class="form-label">{{ __('general.attributes.parent_id') }}</label>
                                    <select id="parent_id"
                                        class="form-control @error('parent_id') is-invalid @enderror" name="parent_id"
                                        required autocomplete="parent_id">
                                        <option value="1"> {{ __('general.select.select') .' ' }} {{ __('general.select.perant_category') }}</option>
                                        @foreach ($records as  $record)
                                            <option value="{{ $record->id }}" {{ $category->parent_id == $record->id ? 'selected' : null }}>{{ $record->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('parent_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="active" class="form-label">{{ __('general.attributes.active') }}</label>
                                    <select id="active" class="form-control @error('active') is-invalid @enderror"
                                        name="active" required autocomplete="active">
                                        <option value="1" {{ $record->active ? 'selected' : null }}>{{ __('general.select.yes') }}</option>
                                        <option value="0">{{ __('general.select.no') }}</option>
                                    </select>
                                    @error('active')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('general.btn.edit') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->

        </div><!-- container -->
    </div>
@endsection

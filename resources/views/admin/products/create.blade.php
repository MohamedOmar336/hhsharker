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
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">Add Product</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form id="quickForm" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data"
                                  class="needs-validation" novalidate>
                                @csrf

                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.name_ar') }}</label>
                                    <input id="name_ar" type="text"
                                           class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                           value="{{ old('name_ar') }}" required autocomplete="name_ar" autofocus>
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
                                           value="{{ old('name_en') }}" required autocomplete="name_en">
                                    @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_ar" class="form-label">{{ __('general.attributes.description_ar') }}</label>
                                    <textarea id="description_ar" class="form-control @error('description_ar') is-invalid @enderror" name="description_ar"
                                              required autocomplete="description_ar">{{ old('description_ar') }}</textarea>
                                    @error('description_ar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_en" class="form-label">{{ __('general.attributes.description_en') }}</label>
                                    <textarea id="description_en" class="form-control @error('description_en') is-invalid @enderror" name="description_en"
                                              required autocomplete="description_en">{{ old('description_en') }}</textarea>
                                    @error('description_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">{{ __('general.attributes.price') }}</label>
                                    <input id="price" type="number"
                                           class="form-control @error('price') is-invalid @enderror" name="price"
                                           value="{{ old('price') }}" required autocomplete="price">
                                    @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="quantity" class="form-label">{{ __('general.attributes.qty') }}</label>
                                    <input id="quantity" type="number"
                                           class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                           value="{{ old('quantity') }}" required autocomplete="quantity">
                                    @error('quantity')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="is_available" class="form-label">{{ __('general.attributes.status') }}</label>
                                    <select id="is_available"
                                            class="form-control @error('is_available') is-invalid @enderror" name="is_available"
                                            required autocomplete="is_available">
                                        <option value="1">{{ __('general.select.yes') }}</option>
                                        <option value="0">{{ __('general.no') }}</option>
                                    </select>
                                    @error('is_available')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                    <input id="image" type="file"
                                           class="form-control @error('image') is-invalid @enderror" name="image" required>
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="category_id" class="form-label">{{ __('general.attributes.category') }}</label>
                                    <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                                        <option value="">{{ __('general.select.category') }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <x-btn name="{{ __('general.btn.submit') }}"></x-btn>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

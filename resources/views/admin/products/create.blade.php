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
                        <h4 class="page-title">Add Product</h4>
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
                                <!-- Basic product information -->
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
                                    <label for="model_number" class="form-label">{{ __('general.attributes.model_number') }}</label>
                                    <input id="model_number" type="text" class="form-control @error('model_number') is-invalid @enderror" name="model_number" value="{{ old('model_number') }}">
                                    @error('model_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="power_supply" class="form-label">{{ __('general.attributes.power_supply') }}</label>
                                    <input id="power_supply" type="text" class="form-control @error('power_supply') is-invalid @enderror" name="power_supply" value="{{ old('power_supply') }}">
                                    @error('power_supply')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="type_of_freon" class="form-label">{{ __('general.attributes.type_of_freon') }}</label>
                                    <input id="type_of_freon" type="text" class="form-control @error('type_of_freon') is-invalid @enderror" name="type_of_freon" value="{{ old('type_of_freon') }}">
                                    @error('type_of_freon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Descriptions -->
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

                                <!-- Additional Features -->
                                <div class="mb-3">
                                    <label for="characteristics_en" class="form-label">{{ __('general.attributes.characteristics_en') }}</label>
                                    <textarea id="characteristics_en" class="form-control @error('characteristics_en') is-invalid @enderror" name="characteristics_en">{{ old('characteristics_en') }}</textarea>
                                    @error('characteristics_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="characteristics_ar" class="form-label">{{ __('general.attributes.characteristics_ar') }}</label>
                                    <textarea id="characteristics_ar" class="form-control @error('characteristics_ar') is-invalid @enderror" name="characteristics_ar">{{ old('characteristics_ar') }}</textarea>
                                    @error('characteristics_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_en" class="form-label">{{ __('general.attributes.optional_features_en') }}</label>
                                    <textarea id="optional_features_en" class="form-control @error('optional_features_en') is-invalid @enderror" name="optional_features_en">{{ old('optional_features_en') }}</textarea>
                                    @error('optional_features_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_ar" class="form-label">{{ __('general.attributes.optional_features_ar') }}</label>
                                    <textarea id="optional_features_ar" class="form-control @error('optional_features_ar') is-invalid @enderror" name="optional_features_ar">{{ old('optional_features_ar') }}</textarea>
                                    @error('optional_features_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Price and Availability -->
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

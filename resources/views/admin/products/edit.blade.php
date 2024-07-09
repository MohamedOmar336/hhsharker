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
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('general.attributes.products') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-product') }} </li>
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
                            <h4 class="page-title">{{ __('general.attributes.edit-product') }} </h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form id="quickForm" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.name_ar') }}</label>
                                    <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ $product->name_ar }}" required>
                                    @error('name_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name_en" class="form-label">{{ __('general.attributes.name_en') }}</label>
                                    <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ $product->name_en }}" required>
                                    @error('name_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="model_number" class="form-label">{{ __('general.attributes.model_number') }}</label>
                                    <input id="model_number" type="text" class="form-control @error('model_number') is-invalid @enderror" name="model_number" value="{{ old('model_number', $product->model_number) }}">
                                    @error('model_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="power_supply" class="form-label">{{ __('general.attributes.power_supply') }}</label>
                                    <input id="power_supply" type="text" class="form-control @error('power_supply') is-invalid @enderror" name="power_supply" value="{{ old('power_supply', $product->power_supply) }}">
                                    @error('power_supply')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="type_of_freon" class="form-label">{{ __('general.attributes.type_of_freon') }}</label>
                                    <input id="type_of_freon" type="text" class="form-control @error('type_of_freon') is-invalid @enderror" name="type_of_freon" value="{{ old('type_of_freon', $product->type_of_freon) }}">
                                    @error('type_of_freon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_ar" class="form-label">{{ __('general.attributes.description_ar') }}</label>
                                    <textarea id="description_ar" class="form-control @error('description_ar') is-invalid @enderror" name="description_ar" required>{{ $product->description_ar }}</textarea>
                                    @error('description_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_en" class="form-label">{{ __('general.attributes.description_en') }}</label>
                                    <textarea id="description_en" class="form-control @error('description_en') is-invalid @enderror" name="description_en" required>{{ $product->description_en }}</textarea>
                                    @error('description_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="characteristics_en" class="form-label">{{ __('general.attributes.characteristics_en') }}</label>
                                    <textarea id="characteristics_en" class="form-control @error('characteristics_en') is-invalid @enderror" name="characteristics_en">{{ old('characteristics_en', $product->characteristics_en) }}</textarea>
                                    @error('characteristics_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="characteristics_ar" class="form-label">{{ __('general.attributes.characteristics_ar') }}</label>
                                    <textarea id="characteristics_ar" class="form-control @error('characteristics_ar') is-invalid @enderror" name="characteristics_ar">{{ old('characteristics_ar', $product->characteristics_ar) }}</textarea>
                                    @error('characteristics_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_en" class="form-label">{{ __('general.attributes.optional_features_en') }}</label>
                                    <textarea id="optional_features_en" class="form-control @error('optional_features_en') is-invalid @enderror" name="optional_features_en">{{ old('optional_features_en', $product->optional_features_en) }}</textarea>
                                    @error('optional_features_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_ar" class="form-label">{{ __('general.attributes.optional_features_ar') }}</label>
                                    <textarea id="optional_features_ar" class="form-control @error('optional_features_ar') is-invalid @enderror" name="optional_features_ar">{{ old('optional_features_ar', $product->optional_features_ar) }}</textarea>
                                    @error('optional_features_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">{{ __('general.attributes.price') }}</label>
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required>
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="quantity" class="form-label">{{ __('general.attributes.quantity') }}</label>
                                    <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ $product->quantity }}" required>
                                    @error('quantity')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="is_available" class="form-label">{{ __('general.attributes.is_available') }}</label>
                                    <select id="is_available" class="form-control @error('is_available') is-invalid @enderror" name="is_available" required>
                                        <option value="1" @if ($product->is_available == 1) selected @endif>{{ __('general.select.yes') }}</option>
                                        <option value="0" @if ($product->is_available == 0) selected @endif>{{ __('general.select.no') }}</option>
                                    </select>
                                    @error('is_available')
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
                                            <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>{{ $category->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.current_image') }}</label><br>
                                    <img src="{{ isset($product->image_url) ? asset('storage/' . $product->image_url) : asset('assets-admin/images/no_image.png') }}" alt="{{ $product->name }}" width="100"><br>
                                    <label for="image" class="form-label mt-2">{{ __('general.attributes.update_image') }}</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
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

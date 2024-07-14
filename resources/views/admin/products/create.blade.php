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
                                <li class="breadcrumb-item"><a
                                        href="{{ route('products.index') }}">{{ __('general.attributes.products') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.add-product') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.add-product') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab">
                                    <a class="nav-link active" id="step4-tab" data-bs-toggle="tab" href="#step4">General Product</a>
                                    <a class="nav-link" id="step5-tab" data-bs-toggle="tab" href="#step5">Home Page Product</a>
                                </div>
                            </nav>
                        
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane active" id="step4">
                                    <div class="card-body">
                                        <form action="{{ route('products.store') }}" method="post" id="custom-step" enctype="multipart/form-data">
                                            @csrf
                                            <nav>
                                                <div class="nav nav-tabs" id="product-nav-tab">
                                                    <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Product Details</a>
                                                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Characteristics</a>
                                                    <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Additional Details</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="product-nav-tabContent">
                                                <div class="tab-pane active" id="step1">
                                                    <!-- Product Details Fields -->
                                                    <div class="mb-3">
                                                        <label for="product_name_ar" class="form-label">Product name (in Arabic):</label>
                                                        <input id="product_name_ar" type="text" class="form-control @error('product_name_ar') is-invalid @enderror" name="product_name_ar" value="{{ old('product_name_ar') }}" required>
                                                        @error('product_name_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_name_en" class="form-label">Product name (in English):</label>
                                                        <input id="product_name_en" type="text" class="form-control @error('product_name_en') is-invalid @enderror" name="product_name_en" value="{{ old('product_name_en') }}" required>
                                                        @error('product_name_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="model_number" class="form-label">Model Number:</label>
                                                        <input id="model_number" type="text" class="form-control @error('model_number') is-invalid @enderror" name="model_number" value="{{ old('model_number') }}" required>
                                                        @error('model_number')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="power_supply" class="form-label">Power Supply:</label>
                                                        <input id="power_supply" type="text" class="form-control @error('power_supply') is-invalid @enderror" name="power_supply" value="{{ old('power_supply') }}" required>
                                                        @error('power_supply')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="type_freon" class="form-label">Type of Freon:</label>
                                                        <input id="type_freon" type="text" class="form-control @error('type_freon') is-invalid @enderror" name="type_freon" value="{{ old('type_freon') }}" required>
                                                        @error('type_freon')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_description_ar" class="form-label">Product Description (in Arabic):</label>
                                                        <textarea id="product_description_ar" class="form-control @error('product_description_ar') is-invalid @enderror" name="product_description_ar" required>{{ old('product_description_ar') }}</textarea>
                                                        @error('product_description_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_description_en" class="form-label">Product Description (in English):</label>
                                                        <textarea id="product_description_en" class="form-control @error('product_description_en') is-invalid @enderror" name="product_description_en" required>{{ old('product_description_en') }}</textarea>
                                                        @error('product_description_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="button" id="step1Next" class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="step2">
                                                    <!-- Characteristics Fields -->
                                                    <div class="mb-3">
                                                        <label for="characteristics_en" class="form-label">Characteristics (in English):</label>
                                                        <select id="choices-multiple-remove-button" name="characteristics_en[]" class="form-control @error('characteristics_en') is-invalid @enderror" multiple>
                                                            @foreach($Characteristics as $Characteristic)
                                                                <option value="{{ $Characteristic->id }}">{{ $Characteristic->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('characteristics_en')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="characteristics_ar" class="form-label">Characteristics (in Arabic):</label>
                                                        <select id="choices-multiple-remove-button" name="characteristics_ar[]" class="form-control @error('characteristics_ar') is-invalid @enderror" multiple>
                                                            @foreach($Characteristics as $Characteristic)
                                                                <option value="{{ $Characteristic->id }}">{{ $Characteristic->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('characteristics_ar')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                        
                                                    <button type="button" id="toggleCharacteristicForm" class="btn btn-sm btn-secondary">Add New Characteristic</button>
                                                    <div id="characteristicForm" style="display: none;">
                                                        <form id="innerForm" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="name_en" class="form-label">{{ __('general.attributes.name_english') }}</label>
                                                                <input id="name_en" type="text" class="form-control" name="name_en" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="name_ar" class="form-label">{{ __('general.attributes.name_arabic') }}</label>
                                                                <input id="name_ar" type="text" class="form-control" name="name_ar" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                                                <input id="image" type="file" class="form-control" name="image" accept=".svg,.png">
                                                            </div>
                                                            <div class="mb-3">
                                                                <button type="button" id="submitInnerForm" class="btn btn-sm btn-de-primary">{{ __('general.btn.create') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                    <div>
                                                        <button type="button" id="step2Prev" class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="button" id="step2Next" class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane" id="step3">
                                                    <!-- Additional Details Fields -->
                                                    <div class="mb-3">
                                                        <label for="optional_features_ar" class="form-label">Optional Features (in Arabic):</label>
                                                        <input id="optional_features_ar" type="text" class="form-control @error('optional_features_ar') is-invalid @enderror" name="optional_features_ar" value="{{ old('optional_features_ar') }}">
                                                        @error('optional_features_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="optional_features_en" class="form-label">Optional Features (in English):</label>
                                                        <input id="optional_features_en" type="text" class="form-control @error('optional_features_en') is-invalid @enderror" name="optional_features_en" value="{{ old('optional_features_en') }}">
                                                        @error('optional_features_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price" class="form-label">Price:</label>
                                                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required>
                                                        @error('price')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status:</label>
                                                        <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required>
                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Image:</label>
                                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="catalog" class="form-label">Catalog:</label>
                                                        <input id="catalog" type="file" class="form-control @error('catalog') is-invalid @enderror" name="catalog">
                                                        @error('catalog')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Category:</label>
                                                        <select id="category" class="form-control @error('category') is-invalid @enderror" name="category">
                                                            <option>Select category</option>
                                                            <!-- Add options here -->
                                                        </select>
                                                        @error('category')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="color" class="form-label">Color:</label>
                                                        <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color[]">
                                                        @error('color')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="button" id="step3Prev" class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="submit" class="btn btn-sm btn-de-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div>
                            <div class="tab-content" id="customTabContent">
                                <div class="tab-pane" id="step5">
                                    <div class="card-body">
                                        <form method="POST" action="#" enctype="multipart/form-data" id="home-page-product-form">
                                            @csrf
                                            <nav>
                                                <div class="nav nav-tabs" id="home-page-nav-tab">
                                                    <a class="nav-link active" id="step6-tab" data-bs-toggle="tab" href="#step6">Product Details</a>
                                                    {{-- <a class="nav-link" id="step7-tab" data-bs-toggle="tab" href="#step7">Characteristics</a>
                                                    <a class="nav-link" id="step8-tab" data-bs-toggle="tab" href="#step8">Additional Details</a> --}}
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="home-page-nav-tabContent">
                                                <div class="tab-pane active" id="step6">
                                                    <br>
                                                    <!-- Product Details Fields -->
                                                    <div class="mb-3">
                                                        <label for="hp_product_name_ar" class="form-label">Product name (in Arabic):</label>
                                                        <input id="hp_product_name_ar" type="text" class="form-control @error('hp_product_name_ar') is-invalid @enderror" name="hp_product_name_ar" value="{{ old('hp_product_name_ar') }}" required>
                                                        @error('hp_product_name_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_product_name_en" class="form-label">Product name (in English):</label>
                                                        <input id="hp_product_name_en" type="text" class="form-control @error('hp_product_name_en') is-invalid @enderror" name="hp_product_name_en" value="{{ old('hp_product_name_en') }}" required>
                                                        @error('hp_product_name_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_model_name" class="form-label">Model Name:</label>
                                                        <input id="hp_model_name" type="text" class="form-control @error('hp_model_name') is-invalid @enderror" name="hp_model_name" value="{{ old('hp_model_name') }}" required>
                                                        @error('hp_model_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_product_description_ar" class="form-label">Product Description (in Arabic):</label>
                                                        <textarea id="hp_product_description_ar" class="form-control @error('hp_product_description_ar') is-invalid @enderror" name="hp_product_description_ar" required>{{ old('hp_product_description_ar') }}</textarea>
                                                        @error('hp_product_description_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_product_description_en" class="form-label">Product Description (in English):</label>
                                                        <textarea id="hp_product_description_en" class="form-control @error('hp_product_description_en') is-invalid @enderror" name="hp_product_description_en" required>{{ old('hp_product_description_en') }}</textarea>
                                                        @error('hp_product_description_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_price" class="form-label">Price:</label>
                                                        <input id="hp_price" type="text" class="form-control @error('hp_price') is-invalid @enderror" name="hp_price" value="{{ old('hp_price') }}" required>
                                                        @error('hp_price')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_status" class="form-label">Status:</label>
                                                        <input id="hp_status" type="text" class="form-control @error('hp_status') is-invalid @enderror" name="hp_status" value="{{ old('hp_status') }}" required>
                                                        @error('hp_status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_dimensions_volume_en" class="form-label">Dimensions and Volume (in English):</label>
                                                        <input id="hp_dimensions_volume_en" type="text" class="form-control @error('hp_dimensions_volume_en') is-invalid @enderror" name="hp_dimensions_volume_en" value="{{ old('hp_dimensions_volume_en') }}">
                                                        @error('hp_dimensions_volume_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_dimensions_volume_ar" class="form-label">Dimensions and Volume (in Arabic):</label>
                                                        <input id="hp_dimensions_volume_ar" type="text" class="form-control @error('hp_dimensions_volume_ar') is-invalid @enderror" name="hp_dimensions_volume_ar" value="{{ old('hp_dimensions_volume_ar') }}">
                                                        @error('hp_dimensions_volume_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_image" class="form-label">Image:</label>
                                                        <input id="hp_image" type="file" class="form-control @error('hp_image') is-invalid @enderror" name="hp_image">
                                                        @error('hp_image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_catalog" class="form-label">Catalog:</label>
                                                        <input id="hp_catalog" type="file" class="form-control @error('hp_catalog') is-invalid @enderror" name="hp_catalog">
                                                        @error('hp_catalog')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_category" class="form-label">Category:</label>
                                                        <select id="hp_category" class="form-control @error('hp_category') is-invalid @enderror" name="hp_category">
                                                            <option>Select category</option>
                                                            <!-- Add options here -->
                                                        </select>
                                                        @error('hp_category')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hp_color" class="form-label">Color:</label>
                                                        <input id="hp_color" type="text" class="form-control @error('hp_color') is-invalid @enderror" name="hp_color[]">
                                                        @error('hp_color')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-sm btn-de-primary">Submit</button>
                                                        {{-- <button type="button" id="step6Next" class="btn btn-sm btn-de-primary">Next</button> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="tab-pane" id="step7">
                                                    <!-- Characteristics Fields -->
                                                  
                                                    <div>
                                                        <button type="button" id="step7Prev" class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="button" id="step7Next" class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="step8">
                                                    <!-- Additional Details Fields -->
                                                   
                                                    <div>
                                                        <button type="button" id="step8Prev" class="btn btn-sm btn-de-primary">Previous</button>
                                                       
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            
                        </div><!--end row-->

                        <!-- end page title end breadcrumb -->
                        {{-- <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form id="quickForm" method="POST" action="{{ route('products.store') }}"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
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
                                    <label for="model_number"
                                        class="form-label">{{ __('general.attributes.model_number') }}</label>
                                    <input id="model_number" type="text"
                                        class="form-control @error('model_number') is-invalid @enderror" name="model_number"
                                        value="{{ old('model_number') }}">
                                    @error('model_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="power_supply"
                                        class="form-label">{{ __('general.attributes.power_supply') }}</label>
                                    <input id="power_supply" type="text"
                                        class="form-control @error('power_supply') is-invalid @enderror" name="power_supply"
                                        value="{{ old('power_supply') }}">
                                    @error('power_supply')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="type_of_freon"
                                        class="form-label">{{ __('general.attributes.type_of_freon') }}</label>
                                    <input id="type_of_freon" type="text"
                                        class="form-control @error('type_of_freon') is-invalid @enderror"
                                        name="type_of_freon" value="{{ old('type_of_freon') }}">
                                    @error('type_of_freon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Descriptions -->
                                <div class="mb-3">
                                    <label for="description_ar"
                                        class="form-label">{{ __('general.attributes.description_ar') }}</label>
                                    <textarea id="description_ar" class="form-control @error('description_ar') is-invalid @enderror" name="description_ar"
                                        required autocomplete="description_ar">{{ old('description_ar') }}</textarea>
                                    @error('description_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_en"
                                        class="form-label">{{ __('general.attributes.description_en') }}</label>
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
                                    <label for="characteristics_en"
                                        class="form-label">{{ __('general.attributes.characteristics_en') }}</label>
                                    <input id="characteristics_en" type="text"
                                        class="form-control icp icp-auto @error('characteristics_en') is-invalid @enderror"
                                        name="characteristics_en" value="{{ old('characteristics_en') }}">
                                    @error('characteristics_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="characteristics_ar"
                                        class="form-label">{{ __('general.attributes.characteristics_ar') }}</label>
                                    <input id="characteristics_ar" type="text"
                                        class="form-control icp icp-auto @error('characteristics_ar') is-invalid @enderror"
                                        name="characteristics_ar" value="{{ old('characteristics_ar') }}">
                                    @error('characteristics_ar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_en"
                                        class="form-label">{{ __('general.attributes.optional_features_en') }}</label>
                                    <textarea id="optional_features_en" class="form-control @error('optional_features_en') is-invalid @enderror"
                                        name="optional_features_en">{{ old('optional_features_en') }}</textarea>
                                    @error('optional_features_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="optional_features_ar"
                                        class="form-label">{{ __('general.attributes.optional_features_ar') }}</label>
                                    <textarea id="optional_features_ar" class="form-control @error('optional_features_ar') is-invalid @enderror"
                                        name="optional_features_ar">{{ old('optional_features_ar') }}</textarea>
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
                                    <label for="is_available"
                                        class="form-label">{{ __('general.attributes.status') }}</label>
                                    <select id="is_available"
                                        class="form-control @error('is_available') is-invalid @enderror"
                                        name="is_available" required autocomplete="is_available">
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
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        required>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_id"
                                        class="form-label">{{ __('general.attributes.category') }}</label>
                                    <select id="category_id"
                                        class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id" required>
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

                                <div class="mb-3">
                                    <button type="submit"
                                        class="btn btn-primary">{{ __('general.btn.create') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row--> --}}
                    </div>
                </div><!-- container -->
            @endsection
            @push('scripts')
            <script>
                $(document).ready(function(){
                    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                        removeItemButton: true,
                        maxItemCount:100,
                        searchResultLimit:5,
                        renderChoiceLimit:5
                    });
                });
            </script>
           <script>
            document.getElementById('toggleCharacteristicForm').addEventListener('click', function() {
    var form = document.getElementById('characteristicForm');
    form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
});

document.getElementById('submitInnerForm').addEventListener('click', function() {
    var form = document.getElementById('innerForm');
    var formData = new FormData(form);

    fetch('{{ route('characteristics.store') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Characteristic added successfully');
            // قم بتحديث القوائم المنسدلة
            updateCharacteristicSelect(data.characteristic);
            document.getElementById('innerForm').reset(); // إعادة تعيين النموذج
        } else {
            alert('An error occurred');
        }
    })
    .catch(error => console.error('Error:', error));
});

function updateCharacteristicSelect(characteristic) {
    var selectEn = document.getElementById('choices-multiple-remove-button-en');
    var selectAr = document.getElementById('choices-multiple-remove-button-ar');

    var optionEn = document.createElement('option');
    optionEn.value = characteristic.id;
    optionEn.text = characteristic.name_en;
    selectEn.appendChild(optionEn);

    var optionAr = document.createElement('option');
    optionAr.value = characteristic.id;
    optionAr.text = characteristic.name_ar;
    selectAr.appendChild(optionAr);
}

            </script>
                
        @endpush
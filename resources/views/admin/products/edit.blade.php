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
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-product') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.edit-product') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <nav>
                                <div>
                                    <button type="button" id="AirConditioner"
                                        class="btn btn-sm btn-primary">Air
                                        Conditioner</button>
                                    <button type="button" id="HomeAppliances"
                                        class="btn btn-sm btn-primary">Home
                                        Appliances</button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane active" >
                                    <div class="card-body">
                                        <form action="{{ route('products.update', $product->id) }}" method="post"
                                            id="custom-step" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <nav>
                                                <div class="nav nav-tabs" id="product-nav-tab">
                                                    <a class="nav-link active" id="step1-tab" data-bs-toggle="tab"
                                                        href="#step1">General</a>
                                                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab"
                                                        href="#step2">Characteristics</a>
                                                    <a class="nav-link" id="step3-tab" data-bs-toggle="tab"
                                                        href="#step3">Technical</a>
                                                </div>
                                            </nav>
                                            <div class="mb-3" style="display:none;">
                                                <label for="type" class="form-label">Product Type:</label>
                                                <input type="hidden" id="productType" name="type" value="{{ $product->type }}">
                                                @error('type')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="tab-content" id="product-nav-tabContent">
                                                <div class="tab-pane fade show active" id="step1" role="tabpanel">
                                                    <!-- General tab content -->
                                                    <div class="mb-3">
                                                        <label for="product_name_ar" class="form-label">Product name (in
                                                            Arabic):</label>
                                                        <input id="product_name_ar" type="text"
                                                            class="form-control @error('product_name_ar') is-invalid @enderror"
                                                            name="product_name_ar"
                                                            value="{{ old('product_name_ar', $product->product_name_ar) }}">
                                                        @error('product_name_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_name_en" class="form-label">Product name (in
                                                            English):</label>
                                                        <input id="product_name_en" type="text"
                                                            class="form-control @error('product_name_en') is-invalid @enderror"
                                                            name="product_name_en"
                                                            value="{{ old('product_name_en', $product->product_name_en) }}">
                                                        @error('product_name_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_description_ar" class="form-label">Product
                                                            Description (in Arabic):</label>
                                                        <textarea id="product_description_ar" class="form-control @error('product_description_ar') is-invalid @enderror"
                                                            name="product_description_ar">{{ old('product_description_ar', $product->product_description_ar) }}</textarea>
                                                        @error('product_description_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_description_en" class="form-label">Product
                                                            Description (in English):</label>
                                                        <textarea id="product_description_en" class="form-control @error('product_description_en') is-invalid @enderror"
                                                            name="product_description_en">{{ old('product_description_en', $product->product_description_en) }}</textarea>
                                                        @error('product_description_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category_id" class="form-label">Category:</label>
                                                        <select id="category_id"
                                                            class="form-control @error('category_id') is-invalid @enderror"
                                                            name="category_id"
                                                            value="{{ old('category_id', $product->category_id) }}">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    @if ($category->id == $product->category_id) selected @endif>
                                                                    {{ $category->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="model_number" class="form-label">Model Number:</label>
                                                        <input id="model_number" type="text"
                                                            class="form-control @error('model_number') is-invalid @enderror"
                                                            name="model_number"
                                                            value="{{ old('model_number', $product->model_number) }}">
                                                        @error('model_number')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status:</label>
                                                        <input id="status" type="text"
                                                            class="form-control @error('status') is-invalid @enderror"
                                                            name="status" value="{{ old('status', $product->status) }}">
                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Catalog:</label><br>
                                                        <a href="{{ $product->catalog ? asset('images/' . $product->catalog) : asset('assets-admin/images/no_image.png') }}"
                                                            download>click</a><br>
                                                        <label for="catalog" class="form-label">Update Catalog:</label>
                                                        <input id="catalog" type="file"
                                                            class="form-control @error('catalog') is-invalid @enderror"
                                                            name="catalog">
                                                        @error('catalog')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image"
                                                            class="form-label">{{ __('general.attributes.image') }}</label><br>
                                                        <img src="{{ $product->image ? asset('images/' . $product->image) : asset('assets-admin/images/no_image.png') }}"
                                                            alt="{{ $product->product_name_ar }}" width="100"><br>
                                                        <label for="image" class="form-label mt-2">Update
                                                            Image:</label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image">
                                                        @error('image')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="button" id="step1Next"
                                                            class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div> <!-- End of General Tab -->

                                                <div class="tab-pane fade" id="step2">
                                                    <!-- Characteristics Tab -->
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="hp_dimensions_volume_en" class="form-label">Dimensions
                                                            and Volume (in English):</label>
                                                        <input id="hp_dimensions_volume_en" type="text"
                                                            class="form-control @error('hp_dimensions_volume_en') is-invalid @enderror"
                                                            name="hp_dimensions_volume_en"
                                                            value="{{ old('hp_dimensions_volume_en', $product->hp_dimensions_volume_en) }}">
                                                        @error('hp_dimensions_volume_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="hp_dimensions_volume_ar" class="form-label">Dimensions
                                                            and Volume (in Arabic):</label>
                                                        <input id="hp_dimensions_volume_ar" type="text"
                                                            class="form-control @error('hp_dimensions_volume_ar') is-invalid @enderror"
                                                            name="hp_dimensions_volume_ar"
                                                            value="{{ old('hp_dimensions_volume_ar', $product->hp_dimensions_volume_ar) }}">
                                                        @error('hp_dimensions_volume_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="characteristics_en" class="form-label">Characteristics
                                                            (in English):</label>
                                                        <select id="choices-multiple-remove-button"
                                                            name="characteristics_en[]"
                                                            class="form-control @error('characteristics_en') is-invalid @enderror"
                                                            multiple>
                                                            @foreach ($characteristics as $Characteristic)
                                                                <option value="{{ $Characteristic->id }}"
                                                                    {{ collect(old('characteristics_en', $product->characteristics_en ?? []))->contains($Characteristic->id) ? 'selected' : '' }}>
                                                                    {{ $Characteristic->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('characteristics_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="characteristics_ar" class="form-label">Characteristics
                                                            (in Arabic):</label>
                                                        <select id="choices-multiple-remove-button"
                                                            name="characteristics_ar[]"
                                                            class="form-control @error('characteristics_ar') is-invalid @enderror"
                                                            multiple>
                                                            @foreach ($characteristics as $Characteristic)
                                                                <option value="{{ $Characteristic->id }}"
                                                                    {{ collect(old('characteristics_ar', $product->characteristics_ar ?? []))->contains($Characteristic->id) ? 'selected' : '' }}>
                                                                    {{ $Characteristic->name_ar }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('characteristics_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="optional_features_ar" class="form-label">Optional
                                                            Features (in Arabic):</label>
                                                        <input id="optional_features_ar" type="text"
                                                            class="form-control @error('optional_features_ar') is-invalid @enderror"
                                                            name="optional_features_ar"
                                                            value="{{ old('optional_features_ar', $product->optional_features_ar) }}">
                                                        @error('optional_features_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="optional_features_en" class="form-label">Optional
                                                            Features (in English):</label>
                                                        <input id="optional_features_en" type="text"
                                                            class="form-control @error('optional_features_en') is-invalid @enderror"
                                                            name="optional_features_en"
                                                            value="{{ old('optional_features_en', $product->optional_features_en) }}">
                                                        @error('optional_features_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="color" class="form-label">Color:</label>
                                                        <input type="color" class="form-control form-control-color" name="color" id="color" value="{{ old('color', $product->color)}} "  title="Choose your color">
                                                        @error('color')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="best_selling" id="best_selling"
                                                            {{ $product->best_selling ? 'checked' : '' }}>
                                                        <label class="form-label" for="best_selling">Best Selling</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="featured"
                                                            id="featured" {{ $product->featured ? 'checked' : '' }}>
                                                        <label class="form-label" for="featured">Featured</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="recommended" id="recommended"
                                                            {{ $product->recommended ? 'checked' : '' }}>
                                                        <label class="form-label" for="recommended">Recommended</label>
                                                    </div>

                                                    <div>
                                                        <button type="button" id="step2Prev"
                                                            class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="button" id="step2Next"
                                                            class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div> <!-- End of Characteristics Tab -->

                                                <div class="tab-pane fade" id="step3" role="tabpanel"
                                                    aria-labelledby="step3-tab">
                                                    <!-- Technical Specifications Tab -->
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="power_supply" class="form-label">Power Supply:</label>
                                                        <input id="power_supply" type="text"
                                                            class="form-control @error('power_supply') is-invalid @enderror"
                                                            name="power_supply"
                                                            value="{{ old('power_supply', $product->power_supply) }}">
                                                        @error('power_supply')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="type_freon" class="form-label">Type of Freon:</label>
                                                        <input id="type_freon" type="text"
                                                            class="form-control @error('type_freon') is-invalid @enderror"
                                                            name="type_freon"
                                                            value="{{ old('type_freon', $product->type_freon) }}">
                                                        @error('type_freon')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="technical_specifications" class="form-label">Technical
                                                            Specifications:</label>
                                                        <input id="technical_specifications" type="text"
                                                            class="form-control @error('technical_specifications') is-invalid @enderror"
                                                            name="technical_specifications"
                                                            value="{{ old('technical_specifications', $product->technical_specifications) }}">
                                                        @error('technical_specifications')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="saso_certificate" class="form-label">SASO
                                                            Certificate:</label>
                                                        <textarea id="saso_certificate" class="form-control @error('saso_certificate') is-invalid @enderror"
                                                            name="saso_certificate">{{ old('saso_certificate', $product->saso_certificate) }}</textarea>
                                                        @error('saso_certificate')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="button" id="step3Prev"
                                                            class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="submit"
                                                            class="btn btn-sm btn-de-primary">Submit</button>
                                                    </div>
                                                </div> <!-- End of Technical Specifications Tab -->
                                            </div>
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>
    <script>

        document.getElementById('AirConditioner').addEventListener('click', function() {
            // document.getElementById('AirConditioner')
            document.getElementById('productType').value = 'AirConditioner';
            document.getElementById('type').value = 'AirConditioner';
        });

        document.getElementById('HomeAppliances').addEventListener('click', function() {
            document.getElementById('productType').value = 'HomeAppliances';
            document.getElementById('type').value = 'HomeAppliances';
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Function to hide Home Appliances sections
            function hideHomeAppliances() {
                const nodeList1 = document.querySelectorAll('.HomeAppliances');
                for (let i = 0; i < nodeList1.length; i++) {
                    nodeList1[i].style.display = "none";
                }
            }

            // Function to make Home Appliances sections visible
            function visibleHomeAppliances() {
                const nodeList2 = document.querySelectorAll('.HomeAppliances');
                for (let i = 0; i < nodeList2.length; i++) {
                    nodeList2[i].style.display = "block";
                }
            }

            // Function to hide Air Conditioner sections
            function hideAirConditioner() {
                const nodeList3 = document.querySelectorAll('.AirConditioner');
                for (let i = 0; i < nodeList3.length; i++) {
                    nodeList3[i].style.display = "none";
                }
            }

            // Function to make Air Conditioner sections visible
            function visibleAirConditioner() {
                const nodeList4 = document.querySelectorAll('.AirConditioner');
                for (let i = 0; i < nodeList4.length; i++) {
                    nodeList4[i].style.display = "block";
                }
            }

            // Function to set the active button class
            function setActiveButton(button) {
                document.querySelectorAll('.btn').forEach(function(btn) {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
            }

            // Adding click event listener to the Air Conditioner button
            const airConditionerBtn = document.querySelector('#AirConditioner');
            airConditionerBtn.addEventListener('click', function() {
                hideHomeAppliances();
                visibleAirConditioner();
                setActiveButton(airConditionerBtn);
            });

            // Adding click event listener to the Home Appliances button
            const homeAppliancesBtn = document.querySelector('#HomeAppliances');
            homeAppliancesBtn.addEventListener('click', function() {
                visibleHomeAppliances();
                hideAirConditioner();
                setActiveButton(homeAppliancesBtn);
            });
        });
    </script>
@endpush

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
                                        class="btn btn-sm btn-primary">{{ __('general.air-conditioner') }}</button>
                                    <button type="button" id="HomeAppliances"
                                        class="btn btn-sm btn-primary">{{ __('general.home-appliances') }}</button>
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
                                                        href="#step1">{{ __('general.general') }}</a>
                                                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab"
                                                        href="#step2">{{ __('general.characteristics') }}</a>
                                                    <a class="nav-link" id="step3-tab" data-bs-toggle="tab"
                                                        href="#step3">{{ __('general.technical') }}</a>
                                                </div>
                                            </nav>
                                            <div class="mb-3" style="display:none;">
                                                <label for="type" class="form-label">{{ __('general.attributes.product_type') }}:</label>
                                                <input type="hidden" id="productType" name="type" value="{{ $product->type }}">
                                                @error('type')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="tab-content" id="product-nav-tabContent">
                                                <div class="tab-pane fade show active" id="step1" role="tabpanel"><br>
                                                    <!-- General tab content -->
                                                    <div class="mb-3">
                                                        <label for="product_name_ar" class="form-label">{{ __('general.attributes.product_name_ar') }}:</label>
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
                                                        <label for="product_name_en" class="form-label">{{ __('general.attributes.product_name_en') }}:</label>
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
                                                        <label for="product_description_ar" class="form-label">{{ __('general.attributes.product_description_ar') }}:</label>
                                                        <textarea id="product_description_ar" class="form-control @error('product_description_ar') is-invalid @enderror"
                                                            name="product_description_ar">{{ old('product_description_ar', $product->product_description_ar) }}</textarea>
                                                        @error('product_description_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="product_description_en" class="form-label">{{ __('general.attributes.product_description_en') }}:</label>
                                                        <textarea id="product_description_en" class="form-control @error('product_description_en') is-invalid @enderror"
                                                            name="product_description_en">{{ old('product_description_en', $product->product_description_en) }}</textarea>
                                                        @error('product_description_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category_id" class="form-label">{{ __('general.attributes.category') }}:</label>
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
                                                        <label for="category" class="form-label">{{ __('general.attributes.subcategory') }}:</label>
                                                        <select id="category"
                                                            class="form-control @error('category_id') is-invalid @enderror"
                                                            name="subcategory_id">
                                                            @foreach ($categories as $category)
                                                                @if ($category->parent_id === null)
                                                                    <option value="{{ $category->id }}" disabled>
                                                                        {{ $category->name_en }}</option>
                                                                    @foreach ($categories as $subcategory)
                                                                        @if ($subcategory->parent_id === $category->id)
                                                                            <option value="{{ $subcategory->id }}"
                                                                                {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}>
                                                                                {{ $subcategory->name_en }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('subcategory_id')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="model_number" class="form-label">{{ __('general.attributes.model_number') }}:</label>
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
                                                        <label for="status" class="form-label">{{ __('general.attributes.status') }}:</label>
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
                                                        <label for="image" class="form-label">{{ __('general.attributes.catalog') }}:</label><br>
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
                                                        <label for="images" class="form-label">{{ __('general.attributes.images') }}</label><br>
                                                        @if(!empty($product->product_image))
                                                            @foreach(json_decode($product->product_image) as $image)
                                                                <img src="{{ asset('images/' . $image) }}" alt="{{ $product->product_name_ar }}" width="100">
                                                            @endforeach
                                                        @else
                                                            <img src="{{ asset('assets-admin/images/no_image.png') }}" alt="{{ $product->product_name_ar }}" width="100">
                                                        @endif
                                                        <br>
                                                        <label for="images" class="form-label mt-2">Update Images:</label>
                                                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                                                        @error('images')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="button" id="step1Next"
                                                            class="btn btn-sm btn-de-primary"> {{ __('general.buttons.next') }}</button>
                                                    </div>
                                                </div> <!-- End of General Tab -->

                                                <div class="tab-pane fade" id="step2"><br>
                                                    <!-- Characteristics Tab -->
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="hp_dimensions_volume_en" class="form-label">{{ __('general.attributes.dimensions_volume_en') }}:</label>
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
                                                        <label for="hp_dimensions_volume_ar" class="form-label">{{ __('general.attributes.dimensions_volume_ar') }}:</label>
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
                                                        <label for="characteristics" class="form-label">{{ __('general.attributes.characteristics') }}:</label>
                                                        <div id="dynamic-fields">
                                                            @foreach($characteristics as $index => $characteristic)
                                                                <div class="form-group row" id="row{{ $index }}">
                                                                    <input type="hidden" name="characteristics[{{ $index }}][id]" value="{{ $characteristic->id }}">
                                                                    <div class="col-md-3">
                                                                        <input type="file" name="characteristics[{{ $index }}][Characteristic_file]" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" name="characteristics[{{ $index }}][Characteristic_name_en]" class="form-control" value="{{ old('characteristics.'.$index.'.Characteristic_name_en', $characteristic->Characteristic_name_en) }}" placeholder="Enter Name (in English):">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" name="characteristics[{{ $index }}][Characteristic_name_ar]" class="form-control" value="{{ old('characteristics.'.$index.'.Characteristic_name_ar', $characteristic->Characteristic_name_ar) }}" placeholder="Enter Name (in Arabic):">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="button" class="btn btn-danger remove-field btn btn-sm btn-de-primary">{{ __('general.buttons.remove') }}</button>
                                                                        <button type="button" class="btn btn-warning hide-field btn btn-sm btn-de-primary">{{ __('general.buttons.hide') }}</button>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <textarea name="characteristics[{{ $index }}][Characteristic_description_en]" class="form-control" placeholder="Enter Description (in English):">{{ old('characteristics.'.$index.'.Characteristic_description_en', $characteristic->Characteristic_description_en) }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <textarea name="characteristics[{{ $index }}][Characteristic_description_ar]" class="form-control" placeholder="Enter Description (in Arabic):">{{ old('characteristics.'.$index.'.Characteristic_description_ar', $characteristic->Characteristic_description_ar) }}</textarea>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <button type="button" class="btn btn-success add-field btn btn-sm btn-de-primary">Add Characteristic</button>
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="optional_features_ar" class="form-label"> {{ __('general.attributes.optional_features_ar') }}:</label>
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
                                                        <label for="optional_features_en" class="form-label">{{ __('general.attributes.optional_features_en') }}:</label>
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
                                                        <label for="color" class="form-label">{{ __('general.attributes.color') }}:</label>
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
                                                        <label class="form-label" for="best_selling"> {{ __('general.attributes.best_selling') }}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="featured"
                                                            id="featured" {{ $product->featured ? 'checked' : '' }}>
                                                        <label class="form-label" for="featured"> {{ __('general.attributes.featured') }}</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="recommended" id="recommended"
                                                            {{ $product->recommended ? 'checked' : '' }}>
                                                        <label class="form-label" for="recommended"> {{ __('general.attributes.recommended') }}</label>
                                                    </div>

                                                    <div>
                                                        <button type="button" id="step2Prev"
                                                            class="btn btn-sm btn-de-primary">{{ __('general.buttons.previous') }}</button>
                                                        <button type="button" id="step2Next"
                                                            class="btn btn-sm btn-de-primary">{{ __('general.buttons.next') }}</button>
                                                    </div>
                                                </div> <!-- End of Characteristics Tab -->

                                                <div class="tab-pane fade" id="step3" role="tabpanel"
                                                    aria-labelledby="step3-tab"><br>
                                                    <!-- Technical Specifications Tab -->
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="power_supply" class="form-label"> {{ __('general.attributes.power_supply') }}:</label>
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
                                                        <label for="type_freon" class="form-label"> {{ __('general.attributes.type_freon') }}:</label>
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
                                                        <label for="technical_specifications" class="form-label"> {{ __('general.attributes.technical_specifications') }}:</label>
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
                                                        <label for="saso_certificate" class="form-label"> {{ __('general.attributes.saso_certificate') }}:</label>
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
                                                            class="btn btn-sm btn-de-primary"> {{ __('general.buttons.previous') }}</button>
                                                        <button type="submit"
                                                            class="btn btn-sm btn-de-primary"> {{ __('general.buttons.submit') }}</button>
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

<script type="text/javascript">
    $(document).ready(function() {
        let fieldIndex = {{ count($characteristics) }}; // Start with the number of existing fields

        // Add new field
        $('.add-field').click(function() {
            fieldIndex++;
            var html = `
                <div class="form-group row" id="row${fieldIndex}">
                    <div class="col-md-3">
                        <input type="file" name="characteristics[${fieldIndex}][Characteristic_file]" class="form-control" placeholder="{{ __('general.placeholders.select_file') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="characteristics[${fieldIndex}][Characteristic_name_en]" class="form-control" placeholder="{{ __('general.placeholders.enter_name_en') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="characteristics[${fieldIndex}][Characteristic_name_ar]" class="form-control" placeholder="{{ __('general.placeholders.enter_name_ar') }}">
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-danger remove-field btn btn-sm btn-de-primary">{{ __('general.buttons.remove') }}</button>
                        <button type="button" class="btn btn-warning hide-field btn btn-sm btn-de-primary">{{ __('general.buttons.hide') }}</button>
                    </div>
                    <div class="col-md-9">
                        <textarea name="characteristics[${fieldIndex}][Characteristic_description_en]" class="form-control" placeholder="{{ __('general.placeholders.enter_description_en') }}"></textarea>
                    </div>
                    <div class="col-md-9">
                        <textarea name="characteristics[${fieldIndex}][Characteristic_description_ar]" class="form-control" placeholder="{{ __('general.placeholders.enter_description_ar') }}"></textarea>
                    </div>
                </div>`;
            $('#dynamic-fields').append(html);
        });

        // Remove a field
        $(document).on('click', '.remove-field', function() {
            $(this).closest('.form-group').remove();
        });

        // Hide a field and save values
        $(document).on('click', '.hide-field', function() {
            var row = $(this).closest('.form-group');

            // Save current values in data attributes
            row.data('name-en', row.find('input[name$="[Characteristic_name_en]"]').val());
            row.data('name-ar', row.find('input[name$="[Characteristic_name_ar]"]').val());
            row.data('desc-en', row.find('textarea[name$="[Characteristic_description_en]"]').val());
            row.data('desc-ar', row.find('textarea[name$="[Characteristic_description_ar]"]').val());

            row.html(`
                <div class="col-md-9">
                    <label class="form-control bg-light">Characteristic (Hidden)</label>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-info unhide-field btn btn-sm btn-de-primary">Unhide</button>
                </div>
            `);
        });

        // Unhide the field and restore values
        $(document).on('click', '.unhide-field', function() {
            var row = $(this).closest('.form-group');
            var fieldIndex = $('#dynamic-fields .form-group').index(row);

            row.html(`
                <div class="col-md-3">
                    <input type="file" name="characteristics[${fieldIndex}][Characteristic_file]" class="form-control" placeholder="{{ __('general.placeholders.select_file') }}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="characteristics[${fieldIndex}][Characteristic_name_en]" class="form-control" placeholder="{{ __('general.placeholders.enter_name_en') }}" value="${row.data('name-en')}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="characteristics[${fieldIndex}][Characteristic_name_ar]" class="form-control" placeholder="{{ __('general.placeholders.enter_name_ar') }}" value="${row.data('name-ar')}">
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger remove-field btn btn-sm btn-de-primary">{{ __('general.buttons.remove') }}</button>
                    <button type="button" class="btn btn-warning hide-field btn btn-sm btn-de-primary">{{ __('general.buttons.hide') }}</button>
                </div>
                <div class="col-md-9">
                    <textarea name="characteristics[${fieldIndex}][Characteristic_description_en]" class="form-control" placeholder="{{ __('general.placeholders.enter_description_en') }}">${row.data('desc-en')}</textarea>
                </div>
                <div class="col-md-9">
                    <textarea name="characteristics[${fieldIndex}][Characteristic_description_ar]" class="form-control" placeholder="{{ __('general.placeholders.enter_description_ar') }}">${row.data('desc-ar')}</textarea>
                </div>
            `);
        });
    });
</script>

@endpush

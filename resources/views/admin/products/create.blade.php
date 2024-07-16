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
                                <div>
                                    <button type="button" id="AirConditioner" class="btn btn-sm btn-primary">Air
                                        Conditioner</button>
                                    <button type="button" id="HomeAppliances" class="btn btn-sm btn-primary">Home
                                        Appliances</button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane active" id="step4">
                                    <div class="card-body">
                                        <form action="{{ route('products.store') }}" method="post" id="custom-step"
                                            enctype="multipart/form-data">
                                            @csrf
                                            
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
                                            <div class="tab-content" id="product-nav-tabContent">
                                                <div class="tab-pane active" id="step1"><br>
                                                    <!-- Product Details Fields -->

                                                    <div class="mb-3" style="display:none;">
                                                        <label for="type" class="form-label">Product Type:</label>
                                                        <input type="hidden" id="productType" name="type"
                                                            value="AirConditioner">
                                                        @error('type')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="product_name_ar" class="form-label">Product name (in
                                                            Arabic):</label>
                                                        <input id="product_name_ar" type="text"
                                                            class="form-control @error('product_name_ar') is-invalid @enderror"
                                                            name="product_name_ar" value="{{ old('product_name_ar') }}">
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
                                                            name="product_name_en" value="{{ old('product_name_en') }}">
                                                        @error('product_name_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="product_description_ar" class="form-label">Product
                                                            Description (in Arabic):</label>
                                                        <textarea id="product_description_ar" class="form-control @error('product_description_ar') is-invalid @enderror"
                                                            name="product_description_ar">{{ old('product_description_ar') }}</textarea>
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
                                                            name="product_description_en">{{ old('product_description_en') }}</textarea>
                                                        @error('product_description_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Category:</label>
                                                        <select id="category"
                                                            class="form-control @error('category') is-invalid @enderror"
                                                            name="category_id">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Sub-category:</label>
                                                        <select id="category" class="form-control @error('category_id') is-invalid @enderror" name="subcategory_id">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                @if ($category->parent_id === null)
                                                                    <option value="{{ $category->id }}" disabled>{{ $category->name_en }}</option>
                                                                    @foreach ($categories as $subcategory)
                                                                        @if ($subcategory->parent_id === $category->id)
                                                                            <option value="{{ $subcategory->id }}"> {{ $subcategory->name_en }}</option>
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
                                                    
                                                    {{-- <div class="mb-3">
                                                        <label for="category" class="form-label">Sub-category:</label>
                                                        <select id="category" class="form-control @error('category') is-invalid @enderror" name="subcategory_id">
                                                            @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                                        @endforeach
                                                        </select>
                                                        @error('sub-category')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="mb-3">
                                                        <label for="model_number" class="form-label">Model Number:</label>
                                                        <input id="model_number" type="text"
                                                            class="form-control @error('model_number') is-invalid @enderror"
                                                            name="model_number" value="{{ old('model_number') }}">
                                                        @error('model_number')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status:</label>
                                                        {{-- <input id="status" type="text"
                                                            class="form-control @error('status') is-invalid @enderror"
                                                            name="status" value="{{ old('status') }}"> --}}
                                                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                                                                <option value="available">Available</option>
                                                                <option value="not_available">Not Available</option>
                                                            </select>

                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="catalog" class="form-label">Catalog:</label>
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
                                                        <label for="image" class="form-label">Image:</label>
                                                        <input id="image" type="file"
                                                            class="form-control @error('image') is-invalid @enderror"
                                                            name="image">
                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>


                                                    <div>
                                                        <button type="button" id="step1Next"
                                                            class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="step2">
                                                    <!-- Characteristics Fields -->
                                                    <br>
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="hp_dimensions_volume_en" class="form-label">Dimensions
                                                            and Volume (in English):</label>
                                                        <input id="hp_dimensions_volume_en" type="text"
                                                            class="form-control @error('hp_dimensions_volume_en') is-invalid @enderror"
                                                            name="hp_dimensions_volume_en"
                                                            value="{{ old('hp_dimensions_volume_en') }}">
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
                                                            value="{{ old('hp_dimensions_volume_ar') }}">
                                                        @error('hp_dimensions_volume_ar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="characteristics_en" class="form-label">Characteristics (in English):</label>
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <select id="choices-multiple-remove-button" name="characteristics_en[]" class="form-control @error('characteristics_en') is-invalid @enderror" multiple>
                                                                    @foreach ($characteristics as $Characteristic)
                                                                        <option value="{{ $Characteristic->id }}">{{ $Characteristic->name_en }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('characteristics_en')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button" class="btn btn-de-primary" data-bs-toggle="modal" data-bs-target="#createCharacteristicsModal">
                                                                    <i data-feather="plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="characteristics_ar" class="form-label">Characteristics (in Arabic):</label>
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <select id="choices-multiple-remove-button" name="characteristics_ar[]" class="form-control @error('characteristics_ar') is-invalid @enderror" multiple>
                                                                    @foreach ($characteristics as $Characteristic)
                                                                        <option value="{{ $Characteristic->id }}">{{ $Characteristic->name_ar }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('characteristics_ar')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button" class="btn btn-de-primary" data-bs-toggle="modal" data-bs-target="#createCharacteristicsModal">
                                                                    <i data-feather="plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>



                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="optional_features_ar" class="form-label">Optional
                                                            Features (in Arabic):</label>
                                                        <input id="optional_features_ar" type="text"
                                                            class="form-control @error('optional_features_ar') is-invalid @enderror"
                                                            name="optional_features_ar"
                                                            value="{{ old('optional_features_ar') }}">
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
                                                            value="{{ old('optional_features_en') }}">
                                                        @error('optional_features_en')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3 AirConditioner">
                                                        <label for="color" class="form-label">Color:</label>
                                                        <input id="color" type="text"
                                                            class="form-control @error('color') is-invalid @enderror"
                                                            name="color[]">
                                                        @error('color')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <hr>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="best_selling" id="best_selling" value="1">
                                                        <label class="form-label" for="best_selling">
                                                            Best Selling
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="featured"
                                                            id="featured" value="1">
                                                        <label class="form-label" for="featured">
                                                            Featured
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="recommended" id="recommended" value="1">
                                                        <label class="form-label" for="recommended">
                                                            Recommended
                                                        </label>
                                                    </div><br>
                                                    <div>
                                                        <button type="button" id="step2Prev"
                                                            class="btn btn-sm btn-de-primary">Previous</button>
                                                        <button type="button" id="step2Next"
                                                            class="btn btn-sm btn-de-primary">Next</button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="step3"><br>
                                                    <!-- Additional Details Fields -->
                                                    <div class="mb-3 HomeAppliances">
                                                        <label for="power_supply" class="form-label">Power Supply:</label>
                                                        <input id="power_supply" type="text"
                                                            class="form-control @error('power_supply') is-invalid @enderror"
                                                            name="power_supply" value="{{ old('power_supply') }}">
                                                        @error('power_supply')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3  HomeAppliances">
                                                        <label for="type_freon" class="form-label">Type of Freon:</label>
                                                        <input id="type_freon" type="text"
                                                            class="form-control @error('type_freon') is-invalid @enderror"
                                                            name="type_freon" value="{{ old('type_freon') }}">
                                                        @error('type_freon')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <hr>
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <label for="Technical Specifications" class="form-label">Technical
                                                            Specifications</label>
                                                        <input id="Technical Specifications" type="text"
                                                            class="form-control @error('Technical Specifications') is-invalid @enderror"
                                                            name="technical_specifications"
                                                            value="{{ old('technical_specifications') }}">
                                                        @error('Technical Specifications')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="SASO Certificate" class="form-label">SASO
                                                            Certificate</label>
                                                        <textarea id="SASO Certificater" class="form-control @error('SASO Certificate') is-invalid @enderror"
                                                            name="saso_certificate">{{ old('saso_certificate') }}</textarea>
                                                        @error('SASO Certificate')
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
                                                </div>
                                            </div>
                                        </form><!--end form-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div>

                            <!--end col-->

                        </div><!--end row-->
                        <div class="modal fade" id="createCharacteristicsModal" tabindex="-1" aria-labelledby="createCharacteristicsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="createCharacteristicsForm" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createCharacteristicsModalLabel">Create Characteristics</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name_en" class="form-label">{{ __('general.attributes.name_english') }}</label>
                                                <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ old('name_en') }}" required autofocus>
                                                @error('name_en')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="name_ar" class="form-label">{{ __('general.attributes.name_arabic') }}</label>
                                                <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ old('name_ar') }}" required>
                                                @error('name_ar')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept=".svg,.png">
                                                @error('image')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.create') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        


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
        $('#createCharacteristicsForm').on('submit', function(e) {
            e.preventDefault();
            
            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('characteristics.store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert('Characteristics created successfully.');
                    $('#createCharacteristicsModal').modal('hide');
                    fetchCharacteristics();
                },
                error: function(response) {
                    alert('An error occurred. Please try again.');
                }
            });
        });

        function fetchCharacteristics() {
            $.ajax({
                url: "{{ route('characteristics.list') }}",
                type: 'GET',
                success: function(data) {
                    let characteristicsEn = $('#choices-multiple-remove-button[name="characteristics_en[]"]');
                    let characteristicsAr = $('#choices-multiple-remove-button[name="characteristics_ar[]"]');

                    characteristicsEn.empty();
                    characteristicsAr.empty();

                    data.forEach(function(characteristic) {
                        characteristicsEn.append(new Option(characteristic.name_en, characteristic.id));
                        characteristicsAr.append(new Option(characteristic.name_ar, characteristic.id));
                    });
                },
                error: function() {
                    alert('Failed to fetch characteristics.');
                }
            });
        }
    });
</script>
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
                // nodeList = document.querySelectorAll('.HomeAppliances');
            });

        document.getElementById('HomeAppliances').addEventListener('click', function() {
            document.getElementById('productType').value = 'HomeAppliances';
            document.getElementById('type').value = 'HomeAppliances';
            //  nodeList = document.querySelectorAll('.HomeAppliances');
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

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
                                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Metrica</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a>
                                        </li><!--end nav-item-->
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
                                <div class="card-body">
            
                                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="name_ar" class="form-label">Name (Arabic)</label>
                            <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ old('name_ar') }}" required autocomplete="name_ar" autofocus>
                            @error('name_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_en" class="form-label">Name (English)</label>
                            <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ old('name_en') }}" required autocomplete="name_en">
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Description (Arabic)</label>
                            <textarea id="description_ar" class="form-control @error('description_ar') is-invalid @enderror" name="description_ar" required autocomplete="description_ar">{{ old('description_ar') }}</textarea>
                            @error('description_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description (English)</label>
                            <textarea id="description_en" class="form-control @error('description_en') is-invalid @enderror" name="description_en" required autocomplete="description_en">{{ old('description_en') }}</textarea>
                            @error('description_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity">
                            @error('quantity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="is_available" class="form-label">Available</label>
                            <select id="is_available" class="form-control @error('is_available') is-invalid @enderror" name="is_available" required autocomplete="is_available">
                                <option value="1" >Yes</option>
                                <option value="0" >No</option>
                            </select>
                            @error('is_available')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                 <!--       <div class="form-group">
                            <label for="category">{{ __('Category') }}</label>
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category">
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label>
                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required autocomplete="status">
                                <option value="active" >Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>-->

                        
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Product') }}
                            </button>
                        </div>
                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->

                @endsection
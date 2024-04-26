
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
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Product</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12 col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name_ar" class="form-label">Name (Arabic)</label>
                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{ $product->name_ar }}" required>
                            @error('name_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_en" class="form-label">Name (English)</label>
                            <input id="name_en" type="text" class="form-control" name="name_en" value="{{ $product->name_en }}" required>
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Description (Arabic)</label>
                            <textarea id="description_ar" class="form-control @error('description_ar') is-invalid @enderror" name="description_ar" required>{{ $product->description_ar }}</textarea>
                            @error('description_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_en" class="form-label">Description (English)</label>
                            <textarea id="description_en" class="form-control @error('description_en') is-invalid @enderror" name="description_en" required>{{ $product->description_en }}</textarea>
                            @error('description_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ $product->quantity }}" required>
                            @error('quantity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="is_available" class="form-label">Available</label>
                            <select id="is_available" class="form-control @error('is_available') is-invalid @enderror" name="is_available" required>
                                <option value="1" @if($product->is_available == 1) selected @endif>Yes</option>
                                <option value="0" @if($product->is_available == 0) selected @endif>No</option>
                            </select>
                            @error('is_available')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Current Image</label><br>
                            <img src="{{ asset('images/' . $product->image_url) }}" alt="{{ $product->name }}" width="100"><br>
                            <label for="image" class="form-label mt-2">Update Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->
                </div>
                @endsection
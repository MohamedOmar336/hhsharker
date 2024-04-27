
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
                                        <li class="breadcrumb-item"><a href="{{ url('/products') }}">Categories</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Category</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12 col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name_ar" class="form-label">{{ __('Name (Arabic)') }}</label>
                            <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ $category->name_ar }}" required autocomplete="name_ar" autofocus>
                            @error('name_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_en" class="form-label">{{ __('Name (English)') }}</label>
                            <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ $category->name_en }}" required autocomplete="name_en">
                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Current Image</label><br>
                            <img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->name }}" width="100"><br>
                            <label for="image" class="form-label mt-2">Update Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="parent_id" class="form-label">{{ __('Parent Category') }}</label>
                            <input id="parent_id" type="number" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value="{{ $category->parent_id }}">
                            @error('parent_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="active" class="form-label">{{ __('Active') }}</label>
                            <select id="active" class="form-control @error('active') is-invalid @enderror" name="active" required autocomplete="active">
                                <option value="1" {{ $category->active ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$category->active ? 'selected' : '' }}>No</option>
                            </select>
                            @error('active')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Category') }}
                            </button>
                        </div>
                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->
                </div>
                @endsection
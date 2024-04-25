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
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Product List</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('general.attributes.image') }}</th>
                                            <th>{{ __('general.attributes.name_ar') }}</th>
                                            <th>{{ __('general.attributes.name_en') }}</th>
                                            <th>{{ __('general.attributes.description_ar') }}</th>
                                            <th>{{ __('general.attributes.description_en') }}</th>
                                            <th>{{ __('general.attributes.price') }}</th>
                                            <th>{{ __('general.attributes.qty') }}</th>
                                            <th>{{ __('general.attributes.state') }}</th>
                                            <th>{{ __('general.attributes.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/' . $product->image_url) }}"
                                                        alt="{{ $product->name }}" width="50">
                                                </td>
                                                <td>{{ $product->name_ar }}</td>
                                                <td>{{ $product->name_en }}</td>
                                                <td>{{ $product->description_ar }}</td>
                                                <td>{{ $product->description_en }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>{{ $product->is_available ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('products.destroy', $product->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                        Add New</a>

                                </div><!--end col-->
                                <div class="col-auto">
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul><!--end pagination-->
                                    </nav><!--end nav-->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

    </div><!-- container -->
@endsection

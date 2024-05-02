@extends('admin.layouts.app')

@section('content')

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">{{ __('general.home') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Categories</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Category List</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="container mt-5">
                    <div class="row">
                        @foreach ($records as $record)
                            <div class="col-md-3">
                                <div class="card card-body">
                                    @if ($record->image)
                                        <img src="{{ asset('images/' . $record->image) }}" alt="{{ $record->name_en }}"
                                            class="card-img-top d-block mx-auto my-4" style="width: 100%; height: 150px;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $record->name_en }}</h5>
                                        <p class="card-text">{{ $record->name_ar }}</p>
                                        <a href="{{ route('categories.edit', $record->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('categories.destroy', $record->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('categories.create') }}" class="btn btn-outline-light btn-sm px-4">+ Add
                                New</a>

                        </div><!--end col-->
                        <div class="col-auto">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul><!--end pagination-->
                            </nav><!--end nav-->
                        </div> <!--end col-->
                    </div><!--end row-->

                </div>
            </div><!-- container -->
        </div>
    </div>
@endsection

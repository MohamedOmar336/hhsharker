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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Product List</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
                <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary">{{__('general.btn.back')}}</a>
                </div>
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
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/' . $record->image_url) }}"
                                                        alt="{{ $record->name }}" width="50">
                                                </td>
                                                <td>{{ $record->name_ar }}</td>
                                                <td>{{ $record->name_en }}</td>
                                                <td>{{ $record->description_ar }}</td>
                                                <td>{{ $record->description_en }}</td>
                                                <td>{{ $record->price }}</td>
                                                <td>{{ $record->quantity }}</td>
                                                <td>{{ $record->is_available ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $record->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('products.destroy', $record->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this product?')">{{ __('general.btn.delete') }}</button>
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
                                        {{ __('general.actions.new') }}</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    {{ $records->links('admin.pagination.bootstrap') }}
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

    </div><!-- container -->
@endsection

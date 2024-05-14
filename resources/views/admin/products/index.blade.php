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
                        
                         <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                     <h4 class="page-title">Product List</h4>
                </div>
                      
                    </div><!--end page-title-box-->
                </div><!--end col-->  
            </div>
            
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body content-area">
                        <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                      
						  <thead class="thead-light">
                                    
                                        <tr>
                                            <th scope="col">{{ __('general.attributes.image') }}</th>
                                            <th scope="col">{{ __('general.attributes.name_ar') }}</th>
                                            <th scope="col">{{ __('general.attributes.name_en') }}</th>
                                            <th scope="col">{{ __('general.attributes.description_ar') }}</th>
                                            <th scope="col">{{ __('general.attributes.description_en') }}</th>
                                            <th scope="col">{{ __('general.attributes.price') }}</th>
                                            <th scope="col">{{ __('general.attributes.qty') }}</th>
                                            <th scope="col">{{ __('general.attributes.state') }}</th>
                                            <th scope="col">{{ __('general.attributes.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td scope="col">
                                                    <img src="{{ asset('images/' . $record->image_url) }}"
                                                        alt="{{ $record->name }}" width="50">
                                                </td>
                                                <td scope="col">{{ $record->name_ar }}</td>
                                                <td scope="col">{{ $record->name_en }}</td>
                                                <td scope="col">{{ $record->description_ar }}</td>
                                                <td scope="col">{{ $record->description_en }}</td>
                                                <td scope="col">{{ $record->price }}</td>
                                                <td scope="col">{{ $record->quantity }}</td>
                                                <td scope="col">{{ $record->is_available ? 'Yes' : 'No' }}</td>
                                                <td scope="col">
                                                    <a href="{{ route('products.edit', $record->id) }}"
                                                        class="btn btn-circle btn-sm"><span class="fa fa-edit"></a>
                                                    <form action="{{ route('products.destroy', $record->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-circle btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this product?')"><span class="fa la-trash"></button>
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

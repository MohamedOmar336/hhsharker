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
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('general.home') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{ __('general.side.categories') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                             <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                     <h4 class="page-title">Product List</h4>
                </div>
                            <h4 class="page-title">{{ __('general.side.categories-list') }}</h4>

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
                                                <th>{{ __('general.attributes.image') }}</th>
                                                <th>{{ __('general.attributes.name_ar') }}</th>
                                                <th>{{ __('general.attributes.name_en') }}</th>
                                                <th>{{ __('general.attributes.parent_id') }}</th>
                                                <th>{{ __('general.attributes.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($records as $record)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('images/' . $record->image) }}"
                                                            alt="{{ $record->name }}" width="50">
                                                    </td>
                                                    <td>{{ $record->name_ar }}</td>
                                                    <td>{{ $record->name_en }}</td>
                                                    <td>{{ $record->parentCategory ? $record->parentCategory['name_en'] : null }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', $record->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <form action="{{ route('categories.destroy', $record->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this category?')">{{ __('general.btn.delete') }}</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('categories.create') }}" class="btn btn-outline-light btn-sm px-4">+
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
        </div>
    </div>
@endsection

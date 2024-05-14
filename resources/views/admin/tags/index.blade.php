<!-- resources/views/admin/tags/index.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.side.tags') }}</li>
                            </ol>
                        </div>
                         <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                     <h4 class="page-title">{{ __('general.side.tags').' ' }} List</h4>
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
                                            <th>{{ __('Tag Name (English)') }}</th>
                                            <th>{{ __('Tag Name (Arabic)') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $record->name_en }}</td>
                                                <td>{{ $record->name_ar }}</td>
                                                <td>
                                                    <a href="{{ route('tags.edit', $record->id) }}"
                                                        class="btn btn-sm btn-primary">{{ __('general.btn.edit') }}</a>
                                                    <form action="{{ route('tags.destroy', $record->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('{{ __('Are you sure you want to delete this tag?') }}')">{{ __('general.btn.delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('tags.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                        {{ __('general.actions.new') }}</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    {{ $records->links('admin.pagination.bootstrap') }}
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

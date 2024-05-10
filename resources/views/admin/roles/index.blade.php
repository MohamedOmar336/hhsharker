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
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{ __('general.side.roles') }}</a>
                                </li><!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.side.roles') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
                <div class="col-md-12">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">{{__('general.btn.back')}}</a>
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
                                            <th>{{ __('general.attributes.name') }}</th>
                                            <th>{{ __('general.attributes.description') }}</th>
                                            <th>{{ __('general.attributes.permission_type') }}</th>
                                            <th>{{ __('general.attributes.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->description }}</td>
                                                <td>{{ $record->permission_type }}</td>
                                                <td>
                                                    <a href="{{ route('roles.edit', $record->id) }}"
                                                        class="btn btn-sm btn-primary">{{ __('general.actions.edit') }}</a>
                                                    <form action="{{ route('roles.destroy', $record->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('{{ __('general.messages.confirm_delete_role') }}')">
                                                            {{ __('general.actions.delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('roles.create') }}"
                                        class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
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

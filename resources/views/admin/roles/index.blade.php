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
                                <li class="breadcrumb-item"><a
                                        href="{{ route('roles.index') }}">{{ __('general.side.roles') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('general.list') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'back-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.list') }}</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
                <div class="col-md-12">
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.name') }}</th>
                        <th>{{ __('general.attributes.description') }}</th>
                        <th>{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td>{{ $record->name }}</td>
                        <td>{{ $record->description }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $record->id) }}"
                                class="btn btn-sm btn-primary">{{ __('general.btn.edit') }}</a>
                            <form action="{{ route('roles.destroy', $record->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('{{ __('general.messages.confirm_delete_role') }}')">
                                    {{ __('general.btn.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('roles.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>


        </div><!--end card-body-->
    </div><!--end card-->
    </div> <!-- end col -->
    </div> <!-- end row -->
    </div><!-- container -->
    </div><!-- container -->
@endsection

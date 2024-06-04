<!-- resources/views/admin/appointments/index.blade.php -->

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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.appointments') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.attributes.appointments') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.id') }}</th>
                        <th>{{ __('general.attributes.creator') }}</th>
                        <th>{{ __('general.attributes.title') }}</th>
                        <th>{{ __('general.attributes.with') }}</th>
                        <th>{{ __('general.attributes.start_time') }}</th>
                        <th>{{ __('general.attributes.finish_time') }}</th>
                        <th>{{ __('general.attributes.status') }}</th>
                        <th>{{ __('general.attributes.notes') }}</th>
                        <th>{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td>{{ $record->id }}</td>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->user->user_name }}</td>
                        <td>{{ $record->withUser->user_name }}</td>
                        <td>{{ $record->start_time }}</td>
                        <td>{{ $record->finish_time }}</td>
                        <td>{{ $record->status }}</td>
                        <td>{{ $record->notes }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $record->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('appointments.edit', $record->id) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('appointments.destroy', $record->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

        </div>
    </div><!-- container -->
@endsection

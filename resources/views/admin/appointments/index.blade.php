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
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.appointments') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa fa-backward"></span> Back
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
                        <th>ID</th>
                        <th>Creator</th>
                        <th>Title</th>
                        <th>With</th>
                        <th>Start Time</th>
                        <th>Finish Time</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        >
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
                            <a href="{{ route('appointments.edit', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('appointments.destroy', $record->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('appointments.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

        </div>
    </div><!-- container -->
@endsection

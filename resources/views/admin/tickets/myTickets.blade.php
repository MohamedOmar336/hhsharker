<!-- resources/views/admin/tickets/my_tickets.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.my_tickets') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.my_tickets') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Assigned To</th>
                        <th>Actions</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td>{{ $record->id }}</td>
                        <td>{{ $record->Title }}</td>
                        <td>{{ $record->priority->Name_en }}</td>
                        <td>{{ $record->status->Name_en }}</td>
                        <td>{{ $record->assignedTo->user_name }}</td>
                        <td>
                            <a href="{{ route('ticket_histories.show_by_ticket', $record->id) }}"
                                class="btn btn-sm btn-info">History</a>
                            <a href="{{ route('tickets.edit', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('tickets.destroy', $record->id) }}" method="POST"
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

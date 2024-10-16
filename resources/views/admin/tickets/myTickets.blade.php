@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.side.tickets') }}</li>
                                <li class="breadcrumb-item active">{{ __('general.list') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}">
                                @if (app()->isLocale('ar'))
                                    <i data-feather="arrow-right-circle"></i> <!-- Arabic locale -->
                                @else
                                    <i data-feather="arrow-left-circle"></i> <!-- Default locale -->
                                @endif
                            </a>
                            <h4 class="page-title">
                                {{ __('general.side.tickets') }} {{ __('general.list') }}
                            </h4>
                        </div>
                    </div>
                </div>
                <x-table tableId="DataTables">
                    <x-slot name="header">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>{{ __('general.attributes.id') }}</th>
                            <th>{{ __('general.attributes.title') }}</th>
                            <th>{{ __('general.attributes.priority') }}</th>
                            <th>{{ __('general.attributes.status') }}</th>
                            <th>{{ __('general.attributes.assigned_to') }}</th>
                            <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                        </tr>
                    </x-slot>
                    @foreach ($records as $record)
                        <tr class="table-body">
                            <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                            <td>{{ $record->id }}</td>
                            <td>
                                <form action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'Title']) }}" method="POST">
                                {{ $record->Title }}
                            </form>
                            </td>
                            <td>
                                <form action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'priority']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-control" name="priority_id" onchange="this.form.submit()">
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->id }}" {{ $record->priority->id == $priority->id ? 'selected' : '' }}>
                                                {{ app()->isLocale('ar') ? $priority->Name_ar : $priority->Name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'status']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-control" name="status_id" onchange="this.form.submit()">
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}" {{ $record->status->id == $status->id ? 'selected' : '' }}>
                                                {{ app()->isLocale('ar') ? $status->Name_ar : $status->Name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'assigned_to']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-control" name="assigned_to" onchange="this.form.submit()">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" {{ $record->assignedTo->id == $user->id ? 'selected' : '' }}>
                                                {{ $user->user_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                            <td>
                                <a class="show_icon" href="{{ route('ticket_histories.show_by_ticket', $record->id) }}"
                                    >
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="{{ route('tickets.edit', $record->id) }}" class="action-button" data-tooltip="edit">
                                    <i data-feather="edit"></i>
                                </a>
                                <form action="{{ route('tickets.destroy', $record->id) }}" method="POST"
                                    style="display:inline-block; margin: -10px;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn delete-form" onclick="confirmDelete(event)">
                                        <i data-feather="trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <x-slot name="createButton" action="{{ route('tickets.bulkDelete') }}">
                        <a href="{{ route('tickets.create') }}" class="btn btn-outline-light btn-sm px-4">+
                            {{ __('general.actions.new') }}</a>
                    </x-slot>

                    <x-slot name="pagination">
                        {{ $records->links('admin.pagination.bootstrap') }}
                    </x-slot>
                </x-table>
            </div>
        </div>
    @endsection

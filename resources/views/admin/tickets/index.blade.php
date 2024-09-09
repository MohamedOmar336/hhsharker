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
                                <li class="breadcrumb-item active">{{ __('general.side.overview') }}</li>
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
                            <h4 class="page-title">{{ __('general.side.tickets-overview') }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Form -->
            <form action="{{ route('tickets.index') }}" method="GET" class="mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <select class="form-control" name="status_id">
                            <option value="">{{ __('general.filter_status') }}</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}"
                                    {{ request('status_id') == $status->id ? 'selected' : '' }}>
                                    {{ app()->isLocale('ar') ? $status->Name_ar : $status->Name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="priority_id">
                            <option value="">{{ __('general.filter_priority') }}</option>
                            @foreach ($priorities as $priority)
                                <option value="{{ $priority->id }}"
                                    {{ request('priority_id') == $priority->id ? 'selected' : '' }}>
                                    {{ app()->isLocale('ar') ? $priority->Name_ar : $priority->Name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="assigned_to">
                            <option value="">{{ __('general.filter_assigned_to') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ request('assigned_to') == $user->id ? 'selected' : '' }}>
                                    {{ $user->user_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-50">{{ __('general.apply_filters') }}</button>
                        <a href="{{ route('tickets.index') }}"
                            class="btn btn-secondary w-45">{{ __('general.reset') }}</a>
                    </div>
                </div>
            </form>


            <x-table tableId="DataTables" class="rounded-corners">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.id') }}</th>
                        <th style="width: 30%;">{{ __('general.attributes.title') }}</th>
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
                        <td>{{ $record->Title }}</td>
                        <td>
                            <form
                                action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'priority']) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-control" name="priority_id" onchange="this.form.submit()">
                                    @foreach ($priorities as $priority)
                                        <option value="{{ $priority->id }}"
                                            {{ $record->priority->id == $priority->id ? 'selected' : '' }}>
                                            {{ app()->isLocale('ar') ? $priority->Name_ar : $priority->Name_en }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'status']) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-control" name="status_id" onchange="this.form.submit()">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}"
                                            {{ $record->status->id == $status->id ? 'selected' : '' }}>
                                            {{ app()->isLocale('ar') ? $status->Name_ar : $status->Name_en }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </td>
                        <td>
                            <form
                                action="{{ route('tickets.update_field', ['id' => $record->id, 'field' => 'assigned_to']) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-control" name="assigned_to" onchange="this.form.submit()">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ $record->assignedTo->id == $user->id ? 'selected' : '' }}>
                                            {{ $user->user_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('ticket_histories.show_by_ticket', $record->id) }}"> <i data-feather="eye"></i></a>
                            <a href="{{ route('tickets.edit', $record->id) }}"><i data-feather="edit"></i></a>
                            <form action="{{ route('tickets.destroy', $record->id) }}" method="POST" class="delete-form"
                                style="display:inline-block; margin: -2px;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form" onclick="confirmDelete(event)"><i data-feather="trash"></i></button>
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

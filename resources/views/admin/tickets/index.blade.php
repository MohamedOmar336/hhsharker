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
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">
                                {{ __('general.side.tickets') }} {{ __('general.list') }}
                            </h4>
                        </div>
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
                        <th scope="col">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->Title }}</td>
                        <td>{{ app()->isLocale('ar') ? $record->priority->Name_ar : $record->priority->Name_en }}</td>
                        <td>{{ app()->isLocale('ar') ?  $record->status->Name_ar  : $record->status->Name_en  }}</td>
                        <td>{{ $record->assignedTo->user_name }}</td>
                        <td>
                            <a href="{{ route('ticket_histories.show_by_ticket', $record->id) }}"
                                class="btn btn-sm btn-info">{{ __('general.btn.history') }}</a>
                            <a href="{{ route('tickets.edit', $record->id) }}"
                                class="btn btn-sm btn-primary">{{ __('general.btn.edit') }}</a>
                            <form action="{{ route('tickets.destroy', $record->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-sm btn-danger">{{ __('general.btn.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('ticket_histories.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

        </div>
    </div>
@endsection

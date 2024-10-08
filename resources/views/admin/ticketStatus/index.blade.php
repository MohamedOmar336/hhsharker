@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ __('general.statuses') }}
                                </li>
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
                                {{ __('general.side.statuses') }} {{ __('general.list') }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.name_arabic') }}</th>
                        <th>{{ __('general.attributes.name_english') }}</th>
                        <th>{{ __('general.attributes.description_arabic') }}</th>
                        <th>{{ __('general.attributes.description_english') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>

                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td>{{ $record->Name_ar }}</td>
                        <td>{{ $record->Name_en }}</td>
                        <td>{{ $record->Description_ar }}</td>
                        <td>{{ $record->Description_en }}</td>
                        <td>
                            <a href="{{ route('ticket-statuses.edit', $record->id) }}">
                                <i data-feather="edit"></i>
                            </a>
                            <form style="display: inline;">
                               
                            </form>
                            <form action="{{ route('ticket-statuses.destroy', $record->id) }}" method="POST"
                                style="display:inline-block;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form"
                                onclick="confirmDelete(event)">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton" action="{{ route('ticket_statuses.bulkDelete') }}">
                    <a href="{{ route('ticket-statuses.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div>
@endsection
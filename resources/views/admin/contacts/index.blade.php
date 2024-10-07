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

                                <div class="col-4" style="position: absolute;z-index: 2;left: 940px;">
                                    <a href="{{ route('contacts.export') }}" class="btn btn-xs btn-primary"
                                        style="margin-right: 20px; margin-bottom: 10px;">
                                        <i class="ti ti-file-download">{{ __('general.attributes.export') }}</i>
                                    </a>
                                </div>
                                <div class="col-4" style="position: absolute;z-index: 1;left: 870px;">
                                    <a href="{{ route('contacts.import.form') }}" class="btn btn-xs btn-primary"
                                        style="margin-right: 20px; margin-bottom: 10px;">
                                        <i class="ti ti-file-download">{{ __('general.attributes.import') }}</i>
                                    </a>
                                </div>
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('contacts.index') }}">{{ __('general.attributes.contacts') }}</a>
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
                            <h4 class="page-title">{{ __('general.side.contacts-list') }}</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.name') }}</th>
                        <th>{{ __('general.attributes.email') }}</th>
                        <th>{{ __('general.attributes.phone') }}</th>
                        <th>{{ __('general.attributes.address') }}</th>
                        <th>{{ __('general.attributes.segment') }}</th>
                        <th>{{ __('general.attributes.groups') }}</th>
                        <th>{{ __('general.attributes.last_interaction') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->address }}</td>
                        <td>{{ $record->segment }}</td>
                        <td>
                            @foreach ($record->groups as $group)
                                <span class="badge bg-primary">{{ $group->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $record->last_interaction }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $record->id) }}"><i data-feather="edit"></i></a>
                            <form style="display: inline;">

                               </form>
                            <form action="{{ route('contacts.destroy', $record->id) }}" method="POST"
                                style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form action-button" data-tooltip="delete"
                                onclick="confirmDelete(event)"><i
                                        data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton" action="{{ route('contacts.bulkDelete') }}">
                    <a href="{{ route('contacts.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div><!-- container -->
    </div><!-- container -->
@endsection

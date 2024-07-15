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
                                    {{ __('general.attributes.appointments') }}
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
                                {{ __('general.attributes.appointments') }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th style="width: 2%;"><input type="checkbox" id="select-all"></th>
                        <th style="width: 2%;">{{ __('general.attributes.id') }}</th>

                        <th style="width: 25%;" >{{ __('general.attributes.title') }}</th>
                        <th>{{ __('general.attributes.creator') }}</th>
                        <th>{{ __('general.attributes.with') }}</th>
                        <th>{{ __('general.attributes.start_time') }}</th>
                        <th>{{ __('general.attributes.finish_time') }}</th>
                        <th>{{ __('general.attributes.status') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->title }}</td>
                        <td>{{ $record->user->user_name }}</td>
                        <td>{{ $record->withUser->user_name }}</td>
                        <td>{{ $record->start_time }}</td>
                        <td>{{ $record->finish_time }}</td>
                        <td>{{ $record->status }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $record->id) }}" >
                                <i data-feather="eye"></i>
                            </a>
                            <a href="{{ route('appointments.edit', $record->id) }}">
                                <i data-feather="edit"></i>
                            </a>
                            <form action="{{ route('appointments.destroy', $record->id) }}" method="POST"
                                style="display:inline-block;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('appointments.create') }}" class="btn btn-outline-light btn-sm px-4">
                        + {{ __('general.actions.new') }}
                    </a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div>
@endsection

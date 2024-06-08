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
                  {{ __('general.side.ticket_statuses') }}
                </li>
              </ol>
            </div>
            <div class="col-md-12">
              <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">
                {{ __('general.side.ticket_statuses') }} {{ __('general.list') }}
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
            <th>{{ __('general.attributes.actions') }}</th>
          </tr>
        </x-slot>

        @foreach ($records as $record)
          <tr>
            <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
            <td>{{ $record->Name_ar }}</td>
            <td>{{ $record->Name_en }}</td>
            <td>{{ $record->Description_ar }}</td>
            <td>{{ $record->Description_en }}</td>
            <td>
              <a href="{{ route('ticket-statuses.edit', $record->id) }}" class="btn btn-sm btn-primary">
                {{ __('general.actions.edit') }}
              </a>
              <form action="{{ route('ticket-statuses.destroy', $record->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('general.confirm_delete') }}')">
                  {{ __('general.actions.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach

        <x-slot name="createButton">
          <a href="{{ route('ticket-statuses.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
        </x-slot>

        <x-slot name="pagination">
          {{ $records->links('admin.pagination.bootstrap') }}
        </x-slot>
      </x-table>
    </div>
  </div>
@endsection

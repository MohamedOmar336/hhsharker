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
                                <li class="breadcrumb-item active">{{ __('general.side.tags') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.side.tags') }} {{ __('general.list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.tag_name_english') }}</th>
                        <th>{{ __('general.attributes.tag_name_arabic') }}</th>
                        <th>{{ __('general.actions.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                    <td>{{ $record->name_en }}</td>
                    <td>{{ $record->name_ar }}</td>
                    <td>
                        <a href="{{ route('tags.edit', $record->id) }}" class="btn btn-sm btn-primary">{{ __('general.btn.edit') }}</a>
                        <form action="{{ route('tags.destroy', $record->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('general.confirm_delete_tag') }}')">{{ __('general.btn.delete') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('tags.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div><!-- container -->
@endsection

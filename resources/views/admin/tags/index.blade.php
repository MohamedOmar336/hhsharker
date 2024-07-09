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
                        <th>{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td>{{ $record->name_en }}</td>
                        <td>{{ $record->name_ar }}</td>
                        <td>
                            <a href="{{ route('tags.edit', $record->id) }}"
                            ><i data-feather="edit"></i></a>
                            <form action="{{ route('tags.destroy', $record->id) }}" method="POST"
                                style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form"
                                    onclick="return confirm('{{ __('general.confirm_delete_tag') }}')"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('tags.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div><!-- container -->
@endsection

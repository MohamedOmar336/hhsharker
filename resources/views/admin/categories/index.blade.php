@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('general.home') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a
                                        href="{{ route('categories.index') }}">{{ __('general.side.categories') }}</a>
                                </li><!--end nav-item-->
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
                            <h4 class="page-title">{{ __('general.side.categories-list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.image') }}</th>
                        <th>{{ __('general.attributes.name_ar') }}</th>
                        <th>{{ __('general.attributes.name_en') }}</th>
                        <th>{{ __('general.attributes.children_categories') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>

                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td><img src="{{ $record->image ? asset('images/' . $record->image) : asset('assets-admin/images/no_image.png') }}"
                                alt="{{ $record->name }}" width="50"></td>
                        <td>{{ $record->name_ar }}</td>
                        <td>{{ $record->name_en }}</td>
                        <td>
                            @if ($record->children->isNotEmpty())

                                    @foreach ($record->children as $child)
                                    <span class="badge bg-primary">{{ $child->name_en }}</span>
                                    @endforeach

                            @else
                                {{ __('No child categories') }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $record->id) }}" class="action-button" data-tooltip="edit"
                                ><i data-feather="edit"></i></a>
                                <form style="display: inline;">
                               
                               </form>
                            <form action="{{ route('categories.destroy', $record->id) }}" method="POST"
                                style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form action-button"
                                    onclick="return confirm('Are you sure you want to delete this category?')" data-tooltip="delete"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <x-slot name="createButton" action="{{ route('categories.bulk-delete') }}">
                    <a href="{{ route('categories.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>
                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div>
@endsection

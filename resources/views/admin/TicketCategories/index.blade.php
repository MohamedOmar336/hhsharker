@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('ticket_categories.index') }}">{{ __('general.side.ticket_categories') }}</a>
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
                            <h4 class="page-title">{{ __('general.side.ticket_categories_list') }}</h4>
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

                @foreach ($ticketCategories as $ticketCategory)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $ticketCategory->id }}"></td>
                        <td>
                            <img src="{{ $ticketCategory->image ? asset('images/' . $ticketCategory->image) : asset('assets-admin/images/no_image.png') }}"
                                alt="{{ $ticketCategory->name }}" width="50">
                        </td>
                        <td>{{ $ticketCategory->name_ar }}</td>
                        <td>{{ $ticketCategory->name_en }}</td>
                        <td>
                            @if ($ticketCategory->children->isNotEmpty())
                                @foreach ($ticketCategory->children as $child)
                                    <span class="badge bg-primary">{{ $child->name_en }}</span>
                                @endforeach
                            @else
                                {{ __('No children categories') }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('ticket_categories.edit', $ticketCategory->id) }}" class="action-button" data-tooltip="edit"><i
                                    data-feather="edit"></i></a>
                            <form action="{{ route('ticket_categories.destroy', $ticketCategory->id) }}" method="POST"
                                style="display:inline-block;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form"
                                    onclick="return confirm('Are you sure you want to delete this category?')"><i
                                        data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('ticket_categories.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>
                <x-slot name="pagination">
                    {{ $ticketCategories->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div>
@endsection

@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <div class="col-4" style="position: absolute;z-index: 2;left: 940px;">
                                <a href="{{ route('products.exports') }}" class="btn btn-xs btn-primary"
                                    style="margin-right: 20px; margin-bottom: 10px;">
                                    <i class="ti ti-file-download">{{ __('general.attributes.export') }}</i>
                                </a>
                            </div>
                            <div class="col-4" style="position: absolute;z-index: 1;left: 870px;">
                                <a href="{{ route('products.import.form') }}" class="btn btn-xs btn-primary"
                                    style="margin-right: 20px; margin-bottom: 10px;">
                                    <i class="ti ti-file-download">{{ __('general.attributes.import') }}</i>
                                </a>
                            </div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a></li>
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
                            <h4 class="page-title mb-0">{{ __('general.list') }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Form -->
            <form action="{{ route('products.index') }}" method="GET" class="mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <select class="form-control" name="category_id">
                            <option value="">{{ __('general.filter_by_category') }}</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="status" placeholder="{{ __('general.filter_by_status') }}" value="{{ request('status') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">{{ __('general.filters') }}</button>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary w-100">{{ __('general.reset') }}</a>
                    </div>
                </div>
            </form>

            <!-- Table -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th scope="col">{{ __('general.attributes.image') }}</th>
                        <th scope="col">{{ __('general.attributes.name_ar') }}</th>
                        <th scope="col">{{ __('general.attributes.name_en') }}</th>
                        <th scope="col">{{ __('general.attributes.type') }}</th>
                        <th scope="col">{{ __('general.attributes.status') }}</th>
                        <th scope="col">{{ __('general.attributes.category') }}</th>
                        <th style="width: 12%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td>
                            @php
                                $images = json_decode($record->product_image, true); // Decode the JSON to an array
                                $firstImage = $images[0] ?? 'assets-admin/images/no_image.png'; // Get the first image or use a placeholder
                            @endphp
                            <img src="{{ asset('images/' . $firstImage) }}" alt="{{ $record->product_name_ar }}" width="50">
                        </td>
                        <td>{{ $record->product_name_ar }}</td>
                        <td>{{ $record->product_name_en }}</td>
                        <td>{{ $record->type }}</td>
                        <td>{{ $record->status }}</td>
                        <td>{{ $record->category ? $record->category : __('general.uncategorized') }}</td>
                        <td>
                            <a href="{{ route('frontend.product.page', ['locale' => app()->getLocale(), 'id' => $record->id]) }}" target="_blank" class="mdi mdi-eye-circle-outline"> </a>
                            <a href="{{ route('products.edit', $record->id) }}" class="action-icon"> <i data-feather="edit"></i></a>
                            {{-- <form style="display: inline;">
                            </form>
                            <form action="{{ route('products.destroy', $record->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-icon delete-btn action-button" data-tooltip="delete" onclick="return confirm('{{ __('general.confirm_delete') }}')">
                                    <i data-feather="trash"></i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
                <x-slot name="createButton" action="{{ route('products.bulkdelete') }}">
                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                </x-slot>
                <x-slot name="pagination">
                    {{ $records->appends(request()->query())->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div><!-- container -->
    </div><!-- container -->
@endsection

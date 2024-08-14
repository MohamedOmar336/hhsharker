@extends('admin.layouts.app')

@section('content')
    <!-- Page Content-->
    <div class="page-content-tab">
        <div class="container-fluid">

            <!-- Page Header with Breadcrumb, Back Button, and Actions -->
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <a href="{{ URL::previous() }}" class="me-3">
                            @if (app()->isLocale('ar'))
                                <i data-feather="arrow-right-circle"></i> <!-- Arabic locale -->
                            @else
                                <i data-feather="arrow-left-circle"></i> <!-- Default locale -->
                            @endif
                        </a>
                        <h4 class="page-title mb-0">{{ __('general.list') }}</h4>
                    </div>
                    <ol class="breadcrumb mb-0 mt-2">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('general.list') }}</li>
                    </ol>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('products.import.form') }}" class="btn btn-xs btn-primary me-2">
                        <i class="ti ti-file-upload"></i> {{ __('general.attributes.import') }}
                    </a>
                    <a href="{{ route('products.exports') }}" class="btn btn-xs btn-primary">
                        <i class="ti ti-file-download"></i> {{ __('general.attributes.export') }}
                    </a>
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
                        <th scope="col">{{ __('general.attributes.description_ar') }}</th>
                        <th scope="col">{{ __('general.attributes.description_en') }}</th>
                        <th scope="col">{{ __('general.attributes.state') }}</th>
                        <th scope="col">{{ __('general.attributes.category') }}</th>
                        <th style="width: 10%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td><img src="{{ $record->image ? asset('images/' . $record->image) : asset('assets-admin/images/no_image.png') }}"
                            alt="{{ $record->product_name_ar }}" width="50"></td>
                        <td>{{ $record->product_name_ar }}</td>
                        <td>{{ $record->product_name_en }}</td>
                        <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $record->product_description_ar }}</td>
                        <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $record->product_description_en }}</td>
                        <td>{{ $record->status }}</td>
                        <td>{{ $record->category ? $record->category->name_en : __('general.uncategorized') }}</td>
                        <td>
                            <a href="{{ route('products.edit', $record->id) }}" class="action-icon"> <i data-feather="edit"></i></a>
                            <form action="{{ route('products.destroy', $record->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-icon delete-btn" onclick="return confirm('{{ __('general.confirm_delete') }}')">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
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

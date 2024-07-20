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
                                <div class="col-4" style="position: absolute;z-index: 2;left: 961px;">
                                    <a href="{{ route('products.exports') }}" class="btn btn-xs btn-primary" style="margin-right: 20px; margin-bottom: 10px;">
                                    <i class="ti ti-file-download"></i>
                                        {{ __('general.attributes.export') }}
                                    </a>
                                </div>
                                <div class="col-4" style="position: absolute;z-index: 1;left: 891px;">
                                    <a href="{{ route('products.import.form') }}" class="btn btn-xs btn-primary"
                                        style="margin-right: 20px; margin-bottom: 10px;">
                                        <i class="ti ti-file-download">{{ __('general.attributes.import') }}</i>
                                    </a>
                                </div>
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a></li>
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
                            <h4 class="page-title">{{ __('general.list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->

            </div>

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
                        {{-- <td scope="col">
                            <img src="{{ $record->image_url ? asset('images/' . $record->image_url) : asset('assets-admin/images/no_image.png') }}" alt="{{ $record->name }}" width="50">
                        </td> --}}
                        <td scope="col">{{ $record->product_name_ar }}</td>
                        <td scope="col">{{ $record->product_name_en }}</td>
                        <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $record->product_description_ar }}</td>
                        <td style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $record->product_description_en }}</td>
                        <td scope="col">{{ $record->status }}</td>
                        <td scope="col">{{ $record->category ? $record->category->name_en : 'Uncategorized' }}</td>
                        <td scope="col">
                            <a href="{{ route('products.edit', $record->id) }}"><i data-feather="edit"></i></a>

                            <form action="{{ route('products.destroy', $record->id) }}" method="POST"
                                style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form"
                                    onclick="return confirm('Are you sure you want to delete this product?')"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton" action="{{ route('products.bulkdelete') }}">
                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div><!-- container -->
    </div><!-- container -->
@endsection

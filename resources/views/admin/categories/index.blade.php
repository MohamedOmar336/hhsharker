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
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
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
                        <th>{{ __('general.attributes.parent_id') }}</th>
                        <th>{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>

                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td><img src="{{ $record->image ? asset('images/' . $record->image) : asset('images/no_image.png') }}"
                                alt="{{ $record->name }}" width="50"></td>
                        <td>{{ $record->name_ar }}</td>
                        <td>{{ $record->name_en }}</td>
                        <td>{{ $record->parentCategory ? $record->parentCategory['name_en'] : null }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('categories.destroy', $record->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this category?')">{{ __('general.btn.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
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

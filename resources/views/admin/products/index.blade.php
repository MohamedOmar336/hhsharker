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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a
                                        href="{{ route('products.index') }}">{{ __('general.attributes.product') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">Product List</h4>
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
                        <th scope="col">{{ __('general.attributes.price') }}</th>
                        <th scope="col">{{ __('general.attributes.qty') }}</th>
                        <th scope="col">{{ __('general.attributes.state') }}</th>
                        <th scope="col">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>

                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>

                        <td scope="col">
                            <img src="{{ $record->image_url ? asset('images/' . $record->image_url) : asset('images/no_image.png') }}"
                                alt="{{ $record->name }}" width="50">
                        </td>

                        <td scope="col">{{ $record->name_ar }}</td>
                        <td scope="col">{{ $record->name_en }}</td>
                        <td scope="col">{{ $record->description_ar }}</td>
                        <td scope="col">{{ $record->description_en }}</td>
                        <td scope="col">{{ $record->price }}</td>
                        <td scope="col">{{ $record->quantity }}</td>
                        <td scope="col">{{ $record->is_available ? 'Yes' : 'No' }}</td>
                        <td scope="col">
                            <a href="{{ route('products.edit', $record->id) }}" class="btn btn-circle btn-sm"><span
                                    class="fa fa-edit"></a>
                            <form action="{{ route('products.destroy', $record->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-circle btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this product?')"><span
                                        class="fa la-trash"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>


        </div><!-- container -->

    </div><!-- container -->
@endsection

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
                                <li class="breadcrumb-item active">{{ __('general.side.characteristics') }}</li>
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
                            <h4 class="page-title">{{ __('general.side.characteristics') }} {{ __('general.list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.image') }}</th>
                        <th>{{ __('general.attributes.name_english') }}</th>
                        <th>{{ __('general.attributes.name_arabic') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($characteristics as $characteristic)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $characteristic->id }}"></td>
                        {{-- <td>
                            @if ($characteristic->image)
                                <img src="{{ asset('images/' . $characteristic->image) }}" alt="{{ $characteristic->name_en }}" width="50">
                            @endif
                        </td> --}}
                        <td><img src="{{ $characteristic->image ? asset('images/' . $characteristic->image) : asset('assets-admin/images/no_image.png') }}"
                            alt="{{ $characteristic->name_en }}" width="50"></td>
                        <td>{{ $characteristic->name_en }}</td>
                        <td>{{ $characteristic->name_ar }}</td>
                      
                            <td>
                            <a href="{{ route('characteristics.edit', $characteristic->id) }}"
                               ><i data-feather="edit"></i></a>
                            <form action="{{ route('characteristics.destroy', $characteristic->id) }}" method="POST"
                                style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form"
                                onclick="confirmDelete(event)"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('characteristics.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $characteristics->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div><!-- container -->
@endsection

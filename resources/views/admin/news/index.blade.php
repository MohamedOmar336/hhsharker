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
                                <li class="breadcrumb-item"><a href="{{ route('news.index') }}">{{ __('general.blogs') }}</a></li>
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
                            <h4 class="page-title">{{ __('general.side.blogs-list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.image') }}</th>
                        <th>{{ __('general.attributes.title_en') }}</th>
                        <th>{{ __('general.attributes.title_ar') }}</th>
                        <th>{{ __('general.attributes.author') }}</th>
                        <th>{{ __('general.attributes.status') }}</th>
                        <th style="width: 10%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td><img src="{{ asset('images/' . $record->image) }}" ></td>
                        <td>{{ $record->title_en }}</td>
                        <td>{{ $record->title_ar }}</td>
                        <td>{{ $record->author->user_name }}</td>
                        <td>{{ $record->status }}</td>
                        <td>
                               <a href="{{ route('news.edit', $record->id) }}"><i data-feather="edit"></i></a>
                            <form action="{{ route('news.destroy', $record->id) }}" method="POST" style="display: inline;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-form" onclick="return confirm('{{ __('general.confirm.delete') }}')"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('news.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

            <!-- Modals -->

        </div><!-- container -->
    </div><!-- container -->
@endsection

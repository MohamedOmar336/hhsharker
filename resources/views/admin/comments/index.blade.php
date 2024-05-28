<!-- resources/views/admin/comments/index.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.attributes.comments') }}</li>
                            </ol>
                        </div>
                          <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                      <h4 class="page-title">{{ __('general.attributes.comments') }}</h4>
                </div>
                       
                       
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                                            <th>{{ __('Post Title') }}</th>
                                            <th>{{ __('Commenter') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Comment') }}</th>
                                            <th>{{ __('Comment Date') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </x-slot>
                                    @foreach ($records as $record)
                                    <tr>
                                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                
                                                <td>{{ optional($record->post)->title_en }}</td>
                                                <td>{{ $record->commenter }}</td>
                                                <td>{{ $record->email }}</td>
                                                <td>{{ $record->comment }}</td>
                                                <td>{{ $record->comment_date }}</td>
                                                <td>
                                                    <a href="{{ route('comments.edit', $record->id) }}"
                                                        class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                                    <form action="{{ route('comments.destroy', $record->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('{{ __('Are you sure you want to delete this comment?') }}')">{{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                                @endforeach

                                                <x-slot name="createButton">
                                                    <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                                        {{ __('general.actions.new') }}</a>
                                                </x-slot>
                            
                                                <x-slot name="pagination">
                                                    {{ $records->links('admin.pagination.bootstrap') }}
                                                </x-slot>
                                            </x-table>
        </div>

    </div><!-- container -->
@endsection

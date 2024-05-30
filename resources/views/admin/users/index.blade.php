@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">{{ __('general.attributes.users') }}</li>
                                </ol>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                                <h4 class="page-title">{{ __('general.attributes.users') . ' ' }} List</h4>
                            </div>

                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <x-table tableId="DataTables">
                    <x-slot name="header">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th scope="col">{{ __('general.attributes.users') }}</th>
                            <th scope="col">{{ __('general.side.roles') }}</th>
                            <th scope="col">{{ __('general.attributes.email') }}</th>
                            <th scope="col">{{ __('general.attributes.phone') }}</th>
                            <th scope="col">{{ __('general.attributes.status') }}</th>
                            <th scope="col">{{ __('general.attributes.actions') }}</th>
                        </tr>
                    </x-slot>

                    @foreach ($records as $record)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                            <td><img src="{{ asset('images/' . $record->image) }}" alt=""
                                    class="rounded-circle thumb-sm me-1">
                                {{ $record->user_name }}
                            </td>
                            <td>Administrator</td>
                            <td>{{ $record->email }}</td>
                            <td>{{ $record->phone }}</td>
                            @if ($record->active)
                                <td><span class="badge badge-soft-success">Active</span></td>
                            @else
                                <td><span class="badge badge-soft-danger">Deactivated</span></td>
                            @endif
                            <td>
                                <a href="{{ route('users.edit', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('users.destroy', $record->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?')">{{ __('general.btn.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <x-slot name="createButton">
                        <a href="{{ route('users.create') }}" class="btn btn-outline-light btn-sm px-4">+
                            {{ __('general.actions.new') }}</a>
                    </x-slot>

                    <x-slot name="pagination">
                        {{ $records->links('admin.pagination.bootstrap') }}
                    </x-slot>
                </x-table>

            </div><!-- container -->
        </div>
        <!-- end page content -->
    </div>
@endsection

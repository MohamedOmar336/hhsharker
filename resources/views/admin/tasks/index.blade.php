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
                                <li class="breadcrumb-item active">{{ __('general.side.tasks') }}</li>
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
                            <h4 class="page-title">{{ __('general.side.tasks') }} {{ __('general.list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.task_title') }}</th>
                        <th>{{ __('general.attributes.assigned_to') }}</th>
                        <th>{{ __('general.attributes.status') }}</th>
                        <th>{{ __('general.attributes.due_date') }}</th>
                        <th style="width: 15%;">{{ __('general.attributes.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $task)
                    <tr class="table-body">
                        <td><input type="checkbox" name="ids[]" value="{{ $task->id }}"></td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->assignedTo ? $task->assignedTo->user_name : __('general.not_assigned') }}</td>
                        <td>{{ __('general.status.'.$task->status) }}</td>
                        <td>{{ $task->due_date ? $task->due_date : __('general.no_due_date') }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}"><i data-feather="edit"></i></a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
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
                    <a href="{{ route('tasks.create') }}" class="btn btn-outline-light btn-sm px-4">+
                        {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div>
    </div><!-- container -->
@endsection

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

            <!-- Filter Form -->
            <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <select class="form-control" name="status">
                            <option value="">{{ __('general.filter_status') }}</option>
                            
                                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>
                                            {{ __('general.status.pending') }}
                                        </option>
                                        <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>
                                            {{ __('general.status.in_progress') }}
                                        </option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
                                            {{ __('general.status.completed') }}
                                        </option>
                                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>
                                            {{ __('general.status.archived') }}
                                        </option>
                                
                        </select>
                    </div>
                    
                    <div class="col-md-3">
                        <select class="form-control" name="assigned_to">
                            <option value="">{{ __('general.filter_assigned_to') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ request('assigned_to') == $user->id ? 'selected' : '' }}>
                                    {{ $user->user_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-50">{{ __('general.apply_filters') }}</button>
                        <a href="{{ route('tasks.index') }}"
                            class="btn btn-secondary w-45">{{ __('general.reset') }}</a>
                    </div>
                </div>
            </form>


            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.id') }}</th>
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
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->assignedTo ? $task->assignedTo->user_name : __('general.not_assigned') }}</td>
                        <td>{{ __('general.status.'.$task->status) }}</td>
                        <td>{{ $task->due_date ? $task->due_date : __('general.no_due_date') }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}"><i data-feather="edit"></i>@csrf</a>
                            <form style="display: inline;">
                               
                            </form>
                                                      
                           
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

                <x-slot name="createButton" action="{{ route('tasks.bulkDelete') }}">
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


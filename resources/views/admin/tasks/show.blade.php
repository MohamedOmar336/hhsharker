@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/tasks') }}">{{ __('general.attributes.tasks') }}</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ $task->id }}
                                </li>
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
                            <h4 class="page-title">
                                {{ __('general.attributes.task') }} - {{ $task->id }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body invoice-head">
                                <div class="row">
                                    <div class="col-md-4 align-self-center">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h3 class="m-0 font-20">Task Title:</h3>
                                            </div>
                                        </div>
                                        <p class="mt-2 mb-0 text-muted">{{ $task->title }}.</p>
                                    </div><!--end col-->
                                    <div class="col-md-8"></div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            
                            <div class="card-body">
                                <div class="row row-cols-3 d-flex justify-content-md-between my-4">
                                    <div class="col-md-3 d-print-flex mb-3">
                                        {{-- <h6 class="mt-0"><b>Task Creator:</b> {{ $task->creator->user_name }}</h6> --}}
                                        <h6 class="mt-0"><b>{{ __('general.attributes.assigned_to') }}:</b> {{ $task->assignedTo ? $task->assignedTo->user_name : 'N/A' }}</h6>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex mb-3">
                                        {{-- <h6 class="m-0"><b>Start Time:</b> {{ $task->start_time }}</h6> --}}
                                        <h6 class="mb-0"><b>{{ __('general.attributes.due_date') }}:</b>{{ $task->due_date ? $task->due_date->format('Y-m-d') : __('general.no_due_date') }}</h6>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex mb-3">
                                        <h6 class="m-0"><b>{{ __('general.attributes.status') }}:</b> {{ $task->status }}</h6>
                                        {{-- <h6 class="mb-0"><b>Notes:</b> {{ $task->notes }}</h6> --}}
                                    </div> <!--end col-->
                                </div><!--end row-->

                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                        <div class="text-center"><small class="font-12"></small></div>
                                    </div><!--end col-->
                                    <div class="col-lg-12 col-xl-4">
                                        <div class="float-end d-print-none mt-2 mt-md-0">
                                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-de-primary">
                                                {{ __('general.btn.edit') }}
                                            </a>
                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-de-primary">
                                                    {{ __('general.btn.delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div><!-- container -->
    </div>
@endsection

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
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/profile') }}">{{ __('general.attributes.profile') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.side.edit') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa fa-backward"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.side.edit') . ' ' . __('general.attributes.profile') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Appointment ID: {{ $appointment->id }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Appointment Details</h5>
                            <p class="card-text"><strong>Title:</strong> {{ $appointment->title }}</p>
                            <p class="card-text"><strong>Creator:</strong> {{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</p>
                            <p class="card-text"><strong>With:</strong> {{ $appointment->withUser->first_name }} {{ $appointment->withUser->last_name }}</p>
                            <p class="card-text"><strong>Start Time:</strong> {{ $appointment->start_time }}</p>
                            <p class="card-text"><strong>Finish Time:</strong> {{ $appointment->finish_time }}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $appointment->status }}</p>
                            <p class="card-text"><strong>Notes:</strong> {{ $appointment->notes }}</p>
                            <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end page-content-tab-->
@endsection

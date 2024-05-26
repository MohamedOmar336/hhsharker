<!-- resources/views/admin/appointments/index.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.attributes.appointments') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa fa-backward"></span> Back
                            </a>
                            <h4 class="page-title">{{ __('general.attributes.appointments') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Creator</th>
                                            <th>Title</th>
                                            <th>With</th>
                                            <th>Start Time</th>
                                            <th>Finish Time</th>
                                            <th>Status</th>
                                            <th>Notes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
                                            <tr>
                                                <td>{{ $appointment->id }}</td>
                                                <td>{{ $appointment->title }}</td>
                                                <td>{{ $appointment->user->user_name }} {{ $appointment->user->last_name }}</td>
                                                <td>{{ $appointment->withUser->user_name }} {{ $appointment->withUser->last_name }}</td>
                                                <td>{{ $appointment->start_time }}</td>
                                                <td>{{ $appointment->finish_time }}</td>
                                                <td>{{ $appointment->status }}</td>
                                                <td>{{ $appointment->notes }}</td>
                                                <td>
                                                    <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-sm btn-info">View</a>
                                                    <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

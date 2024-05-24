<!-- resources/views/admin/tickets/edit.blade.php -->

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
                                        href="{{ url('/tickets') }}">{{ __('general.attributes.tickets') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">Edit ticket</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">

                            <form action="{{ route('tickets.update', $ticket->TicketID) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="Title" name="Title"
                                        value="{{ $ticket->Title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="PriorityID" class="form-label">Priority</label>
                                    <select class="form-control" id="PriorityID" name="PriorityID" required>
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->PriorityID }}"
                                                {{ $ticket->PriorityID == $priority->PriorityID ? 'selected' : '' }}>
                                                {{ $priority->Name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="StatusID" class="form-label">Status</label>
                                    <select class="form-control" id="StatusID" name="StatusID" required>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->StatusID }}"
                                                {{ $ticket->StatusID == $status->StatusID ? 'selected' : '' }}>
                                                {{ $status->Name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="AssignedTo" class="form-label">Assigned To</label>
                                    <select class="form-control" id="AssignedTo" name="AssignedTo" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $ticket->AssignedTo == $user->id ? 'selected' : '' }}>
                                                {{ $user->user_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="CreatedBy" class="form-label">Created By</label>
                                    <select class="form-control" id="CreatedBy" name="CreatedBy" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $ticket->CreatedBy == $user->id ? 'selected' : '' }}>
                                                {{ $user->user_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <div class="mb-3">
                                    <label for="Description" class="form-label">Description</label>
                                    <textarea class="ticket_description form-control" id="Description" name="Description">{{ $ticket->Description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Ticket</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

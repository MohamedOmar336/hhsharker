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
                                <li class="breadcrumb-item active">{{ __('general.side.tags') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span
                                    class="fa fa-backward"></span></a>
                            <h4 class="page-title">{{ __('general.side.tags') . ' ' }} List</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body content-area">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Title</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Assigned To</th>
                                            <th>Created By</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)

                                            <tr>
                                                <td>{{ $ticket->Title }}</td>
                                                <td>{{ isset($ticket->priority->Name_en) ? $ticket->priority->Name_en : null  }}</td>
                                                <td>{{ $ticket->status->Name_en }}</td>
                                                <td>{{ $ticket->assignedTo->user_name }}</td>
                                                <td>{{ $ticket->createdBy->user_name }}</td>
                                                <td>
<<<<<<< HEAD
                                                    <a href="{{ route('ticket_histories.show_by_ticket', $ticket->TicketID) }}"
                                                        class="btn btn-sm btn-info">History</a>
                                                    <a href="{{ route('tickets.edit', $ticket->TicketID) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('tickets.destroy', $ticket->TicketID) }}"
=======
                                                    <a href="{{ route('ticket_histories.show_by_ticket', $ticket->id) }}"
                                                        class="btn btn-info">History</a>
                                                    <a href="{{ route('tickets.edit', $ticket->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('tickets.destroy', $ticket->id) }}"
>>>>>>> 998f35fc1fae53a4a72d4a33e6cf7b9c88c32131
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('tickets.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                        {{ __('general.actions.new') }}</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <!-- You can add more buttons here if needed -->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

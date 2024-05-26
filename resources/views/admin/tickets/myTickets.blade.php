<!-- resources/views/admin/tickets/my_tickets.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.my_tickets') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.my_tickets') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Assigned To</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->TicketID }}</td>
                                                <td>{{ $ticket->Title }}</td>
                                                <td>{{ $ticket->priority->Name_en }}</td>
                                                <td>{{ $ticket->status->Name_en }}</td>
                                                <td>{{ $ticket->assignedTo->user_name }}</td>
                                                <td>
                                                    <a href="{{ route('ticket_histories.show_by_ticket', $ticket->TicketID) }}"
                                                        class="btn btn-sm btn-info">History</a>
                                                    <a href="{{ route('tickets.edit', $ticket->TicketID) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('tickets.destroy', $ticket->TicketID) }}"
                                                        method="POST" style="display:inline-block;">
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

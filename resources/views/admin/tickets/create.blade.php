<!-- resources/views/admin/tickets/create.blade.php -->

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
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">Add ticket</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">

                            <form action="{{ route('tickets.store') }}" method="POST"  enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="Title" class="form-label">{{ __('general.attributes.title') }}</label>
                                    <input id="Title" type="text"
                                        class="form-control @error('Title') is-invalid @enderror" name="Title"
                                       value="{{ old('Title') }}" required autocomplete="Title">
                                    @error('Title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="priority" class="form-label">Priority</label>
                                    <select class="form-control" id="priority" name="priority" required>
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->id }}">{{ $priority->Name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->Name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="AssignedTo" class="form-label">Assigned To</label>
                                    <select class="form-control" id="AssignedTo" name="AssignedTo" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->user_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                 <div class="mb-3">
                                    <label for="Description" class="form-label">Description</label>
                                    <textarea class="ticket_description form-control" id="Description" name="Description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Ticket</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

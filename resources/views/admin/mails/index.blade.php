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
                                    href="{{ url('/mails') }}">{{ __('general.attributes.mails') }}</a>
                            </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Inbox</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Inbox</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar">
                        <button type="button" class="btn btn-primary btn-sm w-100 " data-bs-toggle="modal"
                            data-animation="bounce" data-bs-target="#compose-modal">
                            <i class="fas fa-feather-alt me-2"></i>Compose
                        </button>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="mail-list">
                                    <a href="#" class="active pt-0"><i class="las la-inbox font-15 me-1"></i>Inbox
                                        <span class="ms-1">(5)</span></a>
                                    <a href="#"><i class="las la-star font-15 me-1"></i>Starred</a>
                                    <a href="#"><i class="las la-tag font-15 me-1"></i>Important</a>
                                    <a href="#"><i class="las la-file-alt font-15 me-1"></i>Draft</a>
                                    <a href="#"><i class="las la-paper-plane font-15 me-1"></i>Sent Mail</a>
                                    <a href="#"><i class="las la-trash-alt font-15 me-1"></i>Trash</a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- End Left sidebar -->

                    <div class="email-rightbar">

                        <div class="card my-3">
                            <ul class="message-list">
                                @forelse ($records as $record)
                                    <li>
                                        <div class="col-mail col-mail-1">
                                            <!-- Checkbox input -->
                                            <div class="checkbox-wrapper-mail">
                                                <input type="checkbox" id="chk{{ $record->id }}">
                                                <label for="chk{{ $record->id }}" class="toggle"></label>
                                            </div>
                                            <!-- Sender and subject -->
                                            <a href="{{ route('mails.show', $record->id) }}">
                                                <p class="title">{{ $record->sender->user_name }}</p>
                                                <span class="star-toggle far fa-star"></span>
                                            </a>
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            <!-- Email subject and body teaser -->
                                            <a href="{{ route('mails.show', $record->id) }}" class="subject">{{ $record->subject }} &nbsp;–&nbsp; <span class="teaser">{{ $record->body }}</span></a>
                                            <!-- Date received -->
                                            @if ($record->received_at)
                                                @php
                                                    $receivedDate = is_string($record->received_at) ? new \DateTime($record->received_at) : $record->received_at;
                                                @endphp
                                                <div class="date">{{ $receivedDate->format('M d') }}</div>
                                            @endif
                                        </div>
                                    </li>
                                @empty
                                    <li>
                                        <div class="col-12">
                                            <p class="text-center">No emails found.</p>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div> <!-- end card -->

                        <div class="row mb-3">
                            <div class="col-7 align-self-center">
                                Showing {{ $records->firstItem() }} - {{ $records->lastItem() }} of {{ $records->total() }}
                            </div>
                            <div class="col-5">
                                <div class="btn-group float-end">
                                    {{ $records->links() }}
                                </div>
                            </div>
                        </div> <!--end row-->
                    </div> <!-- end email-rightbar -->
                </div><!-- end Col -->
            </div><!-- End row -->
        </div><!-- container -->
    </div><!-- end page-content-tab -->
@endsection

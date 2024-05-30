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
                                <li class="breadcrumb-item active">Show</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Show</h4>
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

                        <div class="card mt-3">
                            <div class="card-body">

                                <div class="media mb-4">
                                    <img class="d-flex me-2 rounded-circle thumb-md" src="assets/images/users/user-5.jpg"
                                        alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h5 class="font-14 m-0">{{ $mail->sender->getFullNameAttribute() }}</h5>
                                        <small class="text-muted">{{ $mail->sender->email }}</small>
                                    </div>
                                </div>

                                <h4 class="mt-0 font-15">{{ $mail->subject }}</h4>

                                <p>{!! nl2br($mail->body) !!}</p>

                                <hr />


                                <a  href="{{ route('mails.reply', $mail->id) }}" class="btn btn-de-primary btn-sm" data-bs-toggle="modal"
                                    data-animation="bounce" data-bs-target="#compose-modal">
                                    <i class="mdi mdi-reply"></i> Reply</a>
                            </div>
                        </div>
                    </div> <!-- end email-rightbar -->
                </div><!-- end Col -->
            </div><!-- End row -->
        </div><!-- container -->
    </div>
@endsection

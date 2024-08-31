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
                                <li class="breadcrumb-item active">{{ __('general.actions.show') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.actions.show') }}</h4>
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

                        <a href="{{ route('mails.compose') }}" type="button" class="btn btn-primary btn-sm w-100 ">
                            <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                        </a>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="mail-list">
                                    <a href="{{ route('mails.index') }}"
                                        class="{{ request('label') === null ? 'active' : '' }}">
                                        <i class="las la-inbox font-15 me-1"></i>{{ __('general.labels.inbox') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'starred']) }}"
                                        class="{{ request('label') === 'starred' ? 'active' : '' }}">
                                        <i class="las la-star font-15 me-1"></i>{{ __('general.labels.starred') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'important']) }}"
                                        class="{{ request('label') === 'important' ? 'active' : '' }}">
                                        <i class="las la-tag font-15 me-1"></i>{{ __('general.labels.important') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'draft']) }}"
                                        class="{{ request('label') === 'draft' ? 'active' : '' }}">
                                        <i class="las la-file-alt font-15 me-1"></i>{{ __('general.labels.draft') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'sent']) }}"
                                        class="{{ request('label') === 'sent' ? 'active' : '' }}">
                                        <i class="las la-paper-plane font-15 me-1"></i>{{ __('general.labels.sent') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'trash']) }}"
                                        class="{{ request('label') === 'trash' ? 'active' : '' }}">
                                        <i class="las la-trash-alt font-15 me-1"></i>{{ __('general.labels.trash') }}
                                    </a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- End Left sidebar -->

                    <div class="email-rightbar">
                        {{-- <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-de-secondary"
                                    onclick="submitBulkAction('mark_as_read')"><i class="fas fa-inbox"></i></button>
                                <button type="button" class="btn btn-sm btn-de-secondary"
                                    onclick="submitBulkAction('move_trash')"><i class="fas fa-trash"></i></button>
                            </div>

                            <div class="btn-group ms-1">
                                <button type="button" class="btn btn-sm btn-de-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('general.btn.more') }}<i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="#">{{ __('general.btn.mark_starred') }}</a>
                                    <a class="dropdown-item"
                                        href="#">{{ __('general.btn.mark_important') }}</a>
                                    <a class="dropdown-item"
                                        href="#">{{ __('general.btn.mark_draft') }}</a>
                                </div>
                            </div>
                        </div><!-- end toolbar --> --}}

                        <div class="card mt-3">
                            <div class="card-body">

                                <div class="media mb-4">
                                    <img class="d-flex me-2 rounded-circle thumb-md"
                                        src="{{ $mail->recipient->image ? asset('images/' . $mail->recipient->image) : asset('assets-admin/images/user.png') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h5 class="font-14 m-0">{{ $mail->recipient->user_name }}</h5>
                                        <small class="text-muted">{{ $mail->recipient->email }}</small>
                                    </div>
                                </div>

                                <h4 class="mt-0 font-15">{{ $mail->subject }}</h4>

                                <p>{!! nl2br($mail->body) !!}</p>

                                <hr />

                                <a href="{{ route('mails.reply', $mail) }}" class="btn btn-de-primary btn-sm">
                                    <i class="mdi mdi-reply"></i> {{ __('general.btn.reply') }}
                                </a>
                                
                            </div>
                        </div>
                    </div> <!-- end email-rightbar -->
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- container -->
    </div>
@endsection

<!-- resources/views/admin/mails/reply.blade.php -->

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
                                <li class="breadcrumb-item"><a href="{{ url('/mails') }}">{{ __('general.attributes.mails') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.actions.reply') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.actions.reply') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('mails.sendReply', $mail->id) }}" method="POST"  enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient_id" class="form-label">{{ __('general.recipient') }}</label>
                                    <input type="text" id="recipient_id" class="form-control" value="{{ $mail->sender->email }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">{{ __('general.subject') }}</label>
                                    <input id="subject" type="text" class="form-control" value="{{ __('general.subject_prefix.reply') }} {{ $mail->subject }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">{{ __('general.body') }}</label>
                                    <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" rows="5" required>{{ old('body') }}</textarea>
                                    @error('body')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">{{ __('general.actions.send') }}</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

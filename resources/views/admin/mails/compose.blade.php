<!-- resources/views/admin/mails/compose.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.actions.compose') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">{{ __('general.actions.compose') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('mails.send') }}" method="POST"  enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient_id" class="form-label">{{ __('general.recipient') }}</label>
                                    <select name="recipient_id" id="recipient_id" class="form-select">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->user_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('recipient_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">{{ __('general.subject') }}</label>
                                    <input id="subject" type="text"
                                        class="form-control @error('subject') is-invalid @enderror" name="subject"
                                        value="{{ old('subject') }}" required>
                                    @error('subject')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <div class="mb-3">
                                    <label for="body" class="form-label">{{ __('general.body') }}</label>
                                    <textarea id="body" class="form-control @error('body') is-invalid @enderror"  name="body"
                                        rows="6" required>{{ old('body') }}</textarea>
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

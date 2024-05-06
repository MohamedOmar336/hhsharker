<!-- resources/views/admin/comments/edit.blade.php -->

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
                                        href="{{ url('/comments') }}">{{ __('general.attributes.comments') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Comment</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="commenter" class="form-label">{{ __('Commenter') }}</label>
                                    <input id="commenter" type="text"
                                        class="form-control @error('commenter') is-invalid @enderror" name="commenter"
                                        value="{{ old('commenter', $comment->commenter) }}" required autofocus>
                                    @error('commenter')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email', $comment->email) }}" required>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="comment" class="form-label">{{ __('Comment') }}</label>
                                    <textarea id="comment" class="form-control @error('comment') is-invalid @enderror"
                                        name="comment" rows="6" required>{{ old('comment', $comment->comment) }}</textarea>
                                    @error('comment')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="comment_date"
                                        class="form-label">{{ __('Comment Date') }}</label>
                                    <input id="comment_date" type="date"
                                        class="form-control @error('comment_date') is-invalid @enderror" name="comment_date"
                                        value="{{ old('comment_date', $comment->comment_date) }}" required>
                                    @error('comment_date')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update Comment</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

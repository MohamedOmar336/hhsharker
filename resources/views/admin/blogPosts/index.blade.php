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
                                <li class="breadcrumb-item"><a
                                        href="{{ route('blogposts.index') }}">{{ __('general.blogs') }}</a></li>
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.side.blogs-list') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title (English)</th>
                                            <th>Title (Arabic)</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/' . $record->image) }}"
                                                        alt="{{ $record->title_en }}" width="50">
                                                </td>
                                                <td>{{ $record->title_en }}</td>
                                                <td>{{ $record->title_ar }}</td>
                                                <td>{{ $record->author->name }}</td>
                                                <td>{{ $record->status }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                                        data-target="#postModal{{ $record->id }}">View</button>
                                                    <a href="{{ route('blogposts.edit', $record->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('blogposts.destroy', $record->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modals -->
                            @foreach ($records as $record)
                                <div class="modal fade" id="postModal{{ $record->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="postModal{{ $record->title_en }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="postModal{{ $record->id }}Label">
                                                    {{ $record->title_en }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Title (English):</strong> {{ $record->title_en }}</p>
                                                <p><strong>Title (Arabic):</strong> {{ $record->title_ar }}</p>
                                                <p><strong>Content (English):</strong></p>
                                                <p>{{ $record->content_en }}</p>
                                                <p><strong>Content (Arabic):</strong></p>
                                                <p>{{ $record->content_ar }}</p>
                                                <p><strong>Author:</strong> {{ $record->author->name }}</p>
                                                <p><strong>Status:</strong> {{ $record->status }}</p>
                                                <p><strong>Post Date:</strong> {{ $record->post_date }}</p>
                                                <img src="{{ asset('images/' . $record->image) }}"
                                                        alt="{{ $record->title_en }}" width="50">
                                                <!-- Add other post details here -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('blogposts.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                        {{ __('general.actions.new') }}</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    {{ $records->links('admin.pagination.bootstrap') }}
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div><!-- container -->
@endsection

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
                                        href="{{ url('/products') }}">{{ __('general.attributes.product') }}</a></li>
                                <li class="breadcrumb-item active">List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Product List</h4>
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
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/' . $post->image) }}"
                                                        alt="{{ $post->title_en }}" width="50">
                                                </td>
                                                <td>{{ $post->title_en }}</td>
                                                <td>{{ $post->title_ar }}</td>
                                                <td>{{ $post->author->name }}</td>
                                                <td>{{ $post->status }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                                        data-target="#postModal{{ $post->id }}">View</button>
                                                    <a href="{{ route('blogposts.edit', $post->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('blogposts.destroy', $post->id) }}"
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
                            @foreach ($posts as $post)
                                <div class="modal fade" id="postModal{{ $post->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="postModal{{ $post->title_en }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="postModal{{ $post->id }}Label">
                                                    {{ $post->title_en }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Title (English):</strong> {{ $post->title_en }}</p>
                                                <p><strong>Title (Arabic):</strong> {{ $post->title_ar }}</p>
                                                <p><strong>Content (English):</strong></p>
                                                <p>{{ $post->content_en }}</p>
                                                <p><strong>Content (Arabic):</strong></p>
                                                <p>{{ $post->content_ar }}</p>
                                                <p><strong>Author:</strong> {{ $post->author->name }}</p>
                                                <p><strong>Status:</strong> {{ $post->status }}</p>
                                                <p><strong>Post Date:</strong> {{ $post->post_date }}</p>
                                                <img src="{{ asset('images/' . $post->image) }}"
                                                        alt="{{ $post->title_en }}" width="50">
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


                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div><!-- container -->
@endsection

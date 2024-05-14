<!-- resources/views/admin/comments/index.blade.php -->

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
                                <li class="breadcrumb-item active">{{ __('general.attributes.comments') }}</li>
                            </ol>
                        </div>
                          <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary"><span class="fa fa-backward"></a>
                      <h4 class="page-title">{{ __('general.attributes.comments') }}</h4>
                </div>
                       
                       
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                           <div class="table-responsive browser_users">
                                        <table class="table mb-0">
                                      
						  <thead class="thead-light">
                                 <tr>
                                            <th>{{ __('Post Title') }}</th>
                                            <th>{{ __('Commenter') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Comment') }}</th>
                                            <th>{{ __('Comment Date') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>{{ optional($comment->post)->title_en }}</td>
                                                <td>{{ $comment->commenter }}</td>
                                                <td>{{ $comment->email }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                <td>{{ $comment->comment_date }}</td>
                                                <td>
                                                    <a href="{{ route('comments.edit', $comment->id) }}"
                                                        class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                                    <form action="{{ route('comments.destroy', $comment->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('{{ __('Are you sure you want to delete this comment?') }}')">{{ __('Delete') }}</button>
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

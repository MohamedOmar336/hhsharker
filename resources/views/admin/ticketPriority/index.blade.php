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
                                <li class="breadcrumb-item active">{{ __('general.side.tags') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></span></a>
                            <h4 class="page-title">{{ __('general.side.tags').' ' }} List</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body content-area">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Name (Arabic)</th>
                                            <th>Name (English)</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($priorities as $priority)
                                            <tr>
                                                <td>{{ $priority->Name_ar }}</td>
                                                <td>{{ $priority->Name_en }}</td>
                                                <td>{{ $priority->Status }}</td>
                                                <td>
                                                    <a href="{{ route('ticket-priorities.edit', $priority->id) }}" class="btn btn-sm btn-primary">{{ __('general.actions.edit') }}</a>
                                                    <form action="{{ route('ticket-priorities.destroy', $priority->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('general.confirm_delete') }}')">{{ __('general.actions.delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end table-responsive-->
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('ticket-priorities.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <!-- You can add more buttons here if needed -->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
@endsection

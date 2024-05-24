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
                                        href="{{ url('/profile') }}">{{ __('general.attributes.profile') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('general.side.edit') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">{{ __('general.side.edit') . ' ' }}{{ __('general.attributes.profile') }}
                            </h4>

                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                  <div class="card">
            <div class="card-header">
                <h2>{{ $ticket->Title }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $ticket->Description }}</p>
                <p><strong>Priority:</strong> {{ $ticket->priority->name }}</p>
                <p><strong>Status:</strong> {{ $ticket->status->name }}</p>
                <p><strong>Assigned To:</strong> {{ $ticket->assignedTo->name }}</p>
                <p><strong>Created By:</strong> {{ $ticket->createdBy->name }}</p>
            </div>
        </div>

        <h2>History</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Changed By</th>
                    <th>Change Description</th>
                    <th>Changed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histories as $history)
                    <tr>
                        <td>{{ $history->changedBy->user_name }}</td>
                        <td>{{ $history->ChangeDescription }}</td>
                        <td>{{ $history->ChangedAt }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

            </div> <!--end col-->
        </div><!--end row-->
    </div>
@endsection

@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <a href="{{ route('gmail.compose') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                            </a>
                        </div>
                        <h4 class="page-title">{{ __('general.side.show') }}</h4>
                    </div>
                </div>
            </div>
            <!-- End Page Title -->

            <div class="row">
                <div class="col-12">
                    
                    <!-- End Left Sidebar -->

                    <!-- Right Sidebar -->
                    <div class="email-rightbar">
                        <div class="card my-3">
                            <!-- Email Details -->
                            <p><strong>{{ __('general.from') }}:</strong> <span id="email-from">{{ $email['from'] }}</span></p>
                            <p><strong>{{ __('general.date') }}:</strong> <span id="email-date">{{ $email['date'] }}</span></p>
                            <h5><strong>{{ __('general.subject') }}:</strong> <span id="email-subject">{{ $email['subject'] }}</span></h5>
                            
                            <!-- Display email body in iframe -->
                            <div class="email-body">
                                <iframe id="email-iframe" width="100%" height="500" style="border: none;" srcdoc="{{ $email['message'] }}"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- End Right Sidebar -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

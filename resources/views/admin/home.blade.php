@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="container-fluid">
                <!-- Page-Title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ __('general.home') }}</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ __('general.dashboard') }}</a></li>
                                    <li class="breadcrumb-item active">{{ __('general.analytics') }}</li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{ __('general.analytics') }}</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md rounded-circle">
                                                        <i data-feather="tag" class="ti ti-arrow-up"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">{{ __('general.new_tickets') }}</p>
                                                        <p class="mb-0 text-truncate text-muted">{{ __('general.from_average_yesterday') }}</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">{{ $newTicketsCount }}</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md rounded-circle">
                                                        <i data-feather="package" class="fas fa-ticket-alt "></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">{{ __('general.open_tickets') }}</p>
                                                        <p class="mb-0 text-truncate text-muted">{{ __('general.from_average_yesterday') }}</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">{{ $openTicketsCount }}</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md rounded-circle">
                                                        <i data-feather="zap" class="ti ti-player-pause"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">{{ __('general.on_hold') }}</p>
                                                        <p class="mb-0 text-truncate text-muted">{{ __('general.from_average_yesterday') }}</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">{{ $onHoldTicketsCount }}</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 ps-lg-0">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md rounded-circle">
                                                        <i data-feather="lock" class="ti ti-user-exclamation"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">{{ __('general.unassigned') }}</p>
                                                        <p class="mb-0 text-truncate text-muted">{{ __('general.from_average_yesterday') }}</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">{{ $unassignedTicketsCount }}</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->






                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.tickets_status') }}</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body home-card">
                                <div class="">
                                    <div id="Tickets_Status" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                    {{-- @push('scripts')
                        <script>
                            var options1 = @json($options1); // Assuming $options1 is passed from the controller
                            var chart1 = new ApexCharts(document.querySelector("#Tickets_Status"), options1);
                            chart1.render();
                        </script>
                    @endpush --}}

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.customer_satisfaction') }}</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body home-card">
                                <div class="position-absolute bottom-50 start-50 translate-middle mb-n2">
                                    <h3 class="mb-0">94.5%</h3>
                                    <p class="mb-0 text-uppercase fw-semibold text-muted">{{ __('general.happiness') }}</p>
                                </div>
                                <div id="ana_device" class="apex-charts mb-2"></div>
                                <ul class="list-inline mb-0 text-center">
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-grin-stars text-primary font-16 align-middle me-1"></i>{{ __('general.excellent') }}
                                    </li>
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-smile me-1 mb-lg-0 font-16 align-middle" style="color: #fdb5c8;"></i>{{ __('general.very_good') }}
                                    </li>
                                    <li class="list-inline-item mb-2 fw-semibold">
                                        <i class="far fa-meh text-info me-1 font-16 align-middle"></i>{{ __('general.good') }}
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="far fa-frown me-1 font-16 align-middle" style="color: #c693ff;"></i>{{ __('general.fair') }}
                                    </li>
                                </ul>
                                <hr class="hr-dashed">
                                <div class="media">
                                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                    <div class="media-body align-self-center">
                                        <p class="text-muted mb-0">{{ __('general.lorem_ipsum') }}
                                            <a href="#" class="text-primary">{{ __('general.read_more') }}</a>
                                        </p>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->













                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.all_tasks')}}</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <form action="{{ route('tasks.create') }}"  method="GET">
                                        <button
                                            class="btn btn-sm btn-de-primary">
                                                {{ __('general.actions.new') }}</button></form>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>{{ __('general.attributes.id') }}</th>
                                                <th>{{ __('general.attributes.task_title') }}</th>
                                                <th>{{ __('general.attributes.assigned_to') }}</th>
                                                <th>{{ __('general.attributes.status') }}</th>
                                                <th>{{ __('general.attributes.due_date') }}</th>
                                                    {{-- <th scope="col">{{ __('general.attributes.actions') }}</th> --}}
                                            </tr><!--end tr-->
                                        </thead>

                                        <tbody>
                                            @foreach ($tasks as $task)
                                            <tr class="table-body">
                                                <td>{{ $task->id }}</td>
                                                <td>{{ $task->title }}</td>
                                                <td>{{ $task->assignedTo ? $task->assignedTo->name : __('general.not_assigned') }}</td>
                                                <td>{{ __('general.status.'.$task->status) }}</td>
                                                <td>{{ $task->due_date ? $task->due_date->format('Y-m-d') : __('general.no_due_date') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>












                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.all_tickets')}}</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <form action="{{ route('tickets.create') }}"  method="GET">
                                        <button
                                            class="btn btn-sm btn-de-primary">
                                                {{ __('general.actions.new') }}</button></form>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>{{ __('general.attributes.id') }}</th>
                                                <th>{{ __('general.attributes.title') }}</th>
                                                <th>{{ __('general.attributes.priority') }}</th>
                                                <th>{{ __('general.attributes.status') }}</th>
                                                <th>{{ __('general.attributes.assigned_to') }}</th>
                                                {{-- <th scope="col">{{ __('general.attributes.actions') }}</th> --}}
                                            </tr><!--end tr-->
                                        </thead>

                                        <tbody>
                                            @foreach ($tickets as $ticket)
                                                <tr>
                                                    <td>{{ $ticket->id }}</td>
                                                    <td>{{ $ticket->Title }}</td>
                                                    <td>{{ app()->isLocale('ar') ? $ticket->priority->Name_ar : $ticket->priority->Name_en }}
                                                    </td>
                                                    <td>{{ app()->isLocale('ar') ? $ticket->status->Name_ar : $ticket->status->Name_en }}
                                                    </td>
                                                    <td>{{ $ticket->assignedTo->user_name }}</td>
                                                </tr><!--end tr-->
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>




                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.notifications') }}</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group">
                                    @forelse($notifications as $notification)
                                        <li class="list-group-item align-items-center d-flex">
                                            <a href="{{ $notification->data['link'] }}" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">{{ $notification->created_at->diffForHumans() }}</small>
                                                <div class="media">
                                                    <div class="avatar-md bg-soft-primary">
                                                        <i class="ti ti-chart-arcs"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark">{{ $notification->data['message'] }}</h6>
                                                        <small class="text-muted mb-0">{{ $notification->data['message'] }}</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </li>
                                    @empty
                                        <li class="list-group-item">{{ __('general.no_new_notifications') }}</li>
                                    @endforelse
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.appointments') }}</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($appointments as $appointment)
                                        <li class="list-group-item align-items-center d-flex">
                                            <div class="media">
                                                <img src="{{ asset('assets/images/users/' . $appointment->user->image) }}"
                                                    class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="mt-0 mb-1">{{ $appointment->title }}</h6>
                                                    <p class="text-muted mb-0">
                                                        {{ $appointment->start_time->format('d M Y - h:i A') }}</p>
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.calendar') }}</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="dash-datepick">
                                    <input type="hidden" id="light_datepicker" />
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div><!--end container-->
        </div><!--end page-content-tab-->
    </div><!--end page-wrapper-->
@endsection


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
                                                        <i data-feather="tag" class="align-self-center text-muted icon-sm"></i>
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
                                                        <i data-feather="package" class="align-self-center text-muted icon-sm"></i>
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
                                                        <i data-feather="zap" class="align-self-center text-muted icon-sm"></i>
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
                                                        <i data-feather="lock" class="align-self-center text-muted icon-sm"></i>
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
                            <div class="card-body">
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
                            <div class="card-body">
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















                {{-- <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Tasks Performance</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="task_status" class="apex-charts"></div>
                                    <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                        01 January 2021 to 31 June 2021
                                    </h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0 active" data-bs-toggle="tab"
                                            href="#Project1_Tab" role="tab" aria-selected="true">Project1</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project2_Tab"
                                            role="tab" aria-selected="false" tabindex="-1">Project2</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project3_Tab"
                                            role="tab" aria-selected="false" tabindex="-1">Project3</a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                            <div class="card-body pt-0">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="Project1_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-3.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">
                                                        <h4 class="m-0 fw-semibold text-dark font-16">Payment App</h4>
                                                        <p class="text-muted mb-0 font-13"><span class="text-dark">Client
                                                                : </span>Kevin J. Heal</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 02
                                                        June 2021</span></h6>
                                                <h6 class="fw-semibold  mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 31 Oct 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete"><span>Design</span></li>
                                                <li class="complete continuous"><span>Development</span></li>
                                                <li class=""><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum
                                                available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">34% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 34%;" aria-valuenow="34" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>6
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">34/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex  mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane" id="Project2_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-2.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">

                                                        <h4 class="m-0 fw-semibold text-dark font-16">Banking</h4>
                                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client
                                                                : </span>Hyman M. Cross</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal">
                                                        15 Nov 2021</span></h6>
                                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete continuous"><span>Design</span></li>
                                                <li class=""><span>Development</span></li>
                                                <li class=""><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem
                                                Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">15% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    style="width: 15%;" aria-valuenow="15" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>4
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane" id="Project3_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-1.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">

                                                        <h4 class="m-0 fw-semibold text-dark font-16">Transfer Money</h4>
                                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client
                                                                : </span>Kevin J. Heal</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal">
                                                        01 Jan 2021</span></h6>
                                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 15 Mar 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete"><span>Design</span></li>
                                                <li class="complete"><span>Development</span></li>
                                                <li class="complete finish"><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-check text-danger"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 481:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 2 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem
                                                Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">100% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>2
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">100/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex  mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div> --}}









                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">{{ __('general.all-tickets')}}</h4>
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


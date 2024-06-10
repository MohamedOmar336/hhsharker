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
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Analytics</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Analytics</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
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
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="tag"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">New Tickets</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">155</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="package"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">Open Tickets</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">102</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="zap"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">On Hold</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">14</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 ps-lg-0">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="lock"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">Unassigned</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">75</h4>
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
                                            <h4 class="card-title">Tickets Status</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                                                 
                                    <div class="">
                                        <div id="Tickets_Status" class="apex-charts"></div>
                                    </div>  
                                </div><!--end card-body-->                                
                            </div><!--end card-->   
                        </div> <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Customer Satisfaction</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="position-absolute bottom-50 start-50 translate-middle mb-n2">
                                    <h3 class="mb-0">94.5%</h3>
                                    <p class="mb-0 text-uppercase fw-semibold text-muted">Happiness</p>
                                </div>
                                <div id="ana_device" class="apex-charts mb-2"></div>
                                <ul class="list-inline mb-0 text-center">
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-grin-stars text-primary font-16 align-middle me-1"></i>Excellent
                                    </li>
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-smile me-1 mb-lg-0 font-16 align-middle"
                                            style="color: #fdb5c8;"></i>Very Good
                                    </li>
                                    <li class="list-inline-item mb-2 fw-semibold">
                                        <i class="far fa-meh text-info me-1 font-16 align-middle"></i>Good
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="far fa-frown  me-1 font-16 align-middle"
                                            style="color: #c693ff;"></i>Fair
                                    </li>
                                </ul>
                                <hr class="hr-dashed">
                                <div class="media">
                                    <span
                                        class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                    <div class="media-body align-self-center">
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum
                                            available...
                                            <a href="#" class="text-primary">Read more</a>
                                        </p>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->














{{-- 

                <div class="row">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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
                                                        <p class="text-muted  mb-0 font-13"><span
                                                                class="text-dark">Client : </span>Hyman M. Cross</p>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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
                                                        <p class="text-muted  mb-0 font-13"><span
                                                                class="text-dark">Client : </span>Kevin J. Heal</p>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
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

                </div>








 --}}





                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">All Tickets</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-de-primary">Create Ticket</button>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="max-width: 95px;">
                                                    <input class="form-check-input" type="checkbox" id="checkbox1"
                                                        value="" aria-label="...">
                                                </th>
                                                <th>ID</th>
                                                <th>Customers</th>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Status</th>
                                                <th>Respose Time</th>
                                            </tr><!--end tr-->
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox2"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#1236</td>
                                                <td><img src="assets/images/users/user-10.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Donald Gardner</td>
                                                <td>Bug-report simply dummy text of the printing and typesetting</td>
                                                <td>Medium</td>
                                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                                <td>14 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox3"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#3569</td>
                                                <td><img src="assets/images/users/user-9.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Kevin J. Heal</td>
                                                <td>The application continuous is a long established fact that a reader.
                                                </td>
                                                <td class="text-danger">Critical</td>
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                                <td>45 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox4"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#9874</td>
                                                <td><img src="assets/images/users/user-8.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Frank M. Lyons</td>
                                                <td>See how it work start are many variations of passages of Lorem Ipsum
                                                    available.</td>
                                                <td>Low</td>
                                                <td><span class="badge badge-soft-primary p-2">Open</span></td>
                                                <td>1 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox5"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#5412</td>
                                                <td><img src="assets/images/users/user-7.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Robert C. Golding</td>
                                                <td>I can't upload file first line of Ipsum lorem ipsum dolor sit amet.</td>
                                                <td>Medium</td>
                                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                                <td>2 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox6"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#3258</td>
                                                <td><img src="assets/images/users/user-6.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Hyman M. Cross</td>
                                                <td>How do i upgrade my profile?</td>
                                                <td>Low</td>
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                                <td>4 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox7"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#6636</td>
                                                <td><img src="assets/images/users/user-5.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Phillip T. Morse</td>
                                                <td>Can i help you in this project?</td>
                                                <td class="text-danger">Critical</td>
                                                <td><span class="badge badge-soft-primary p-2">Opan</span></td>
                                                <td>4 houur</td>
                                            </tr><!--end tr-->
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
                                        <h4 class="card-title">Activity</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-bodyp-0">
                                <div class="p-3" data-simplebar style="height: 400px;">
                                    <div class="activity">
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-clock bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="#">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">10 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="#">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">50 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src=" {{ asset('assets-admin/images/users/user-5.jpg') }} "
                                                    alt="" class="rounded-circle thumb-sm">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="#">Mannat #112233</a> with
                                                        theme
                                                        market
                                                    </p>
                                                    <small class="text-muted">10 hours ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="#">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="#">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">14 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end activity-->
                                </div><!--end analytics-dash-activity-->
                            </div> <!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Appointments</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item align-items-center d-flex">
                                        <div class="media">
                                            <img src="assets/images/small/project-1.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Meeting with UI/UX Designers</h6>
                                                <p class="text-muted mb-0">Today 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="assets/images/users/user-5.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Lunch with my friend</h6>
                                                <p class="text-muted mb-0">Today 12:30 PM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="assets/images/small/project-3.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Call for payment Project ID : #254136</h6>
                                                <p class="text-muted mb-0">Tomorrow 10:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="assets/images/users/user-4.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Picnic with my Family</h6>
                                                <p class="text-muted mb-0">01 June 2019 - 09:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="assets/images/small/project-4.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Meeting with Developers</h6>
                                                <p class="text-muted mb-0">04 June 2019 - 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                <!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Calendar</h4>
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
   
 
        </div>
        <!-- end page content -->

    </div>
@endsection

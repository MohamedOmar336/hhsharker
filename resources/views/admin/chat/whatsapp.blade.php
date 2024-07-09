<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/chatvia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2024 06:58:02 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive Bootstrap 5 Chat App" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- magnific-popup css -->
    <link href="{{ asset('assets-admin/assets-chat/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/assets-chat/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets-admin/assets-chat/libs/owl.carousel/assets/owl.theme.default.min.css') }} ">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/assets-chat/css/bootstrap-chat.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-admin/assets-chat/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-admin/assets-chat/css/chat.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="layout-wrapper d-lg-flex">
        <!-- Start left sidebar-menu -->
        <div class="side-menu flex-lg-column me-lg-1 ms-lg-0">
            <!-- Start side-menu nav -->
            <div class="flex-lg-column my-auto">
                <ul class="nav nav-pills side-menu-nav justify-content-center" role="tablist">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                        <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                            <i class="ri-user-2-line"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Chats">
                        <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat"
                            role="tab">
                            <i class="ri-message-3-line"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Groups">
                        <a class="nav-link" id="pills-groups-tab" data-bs-toggle="pill" href="#pills-groups"
                            role="tab">
                            <i class="ri-group-line"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Contacts">
                        <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts"
                            role="tab">
                            <i class="ri-contacts-line"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                        <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting"
                            role="tab">
                            <i class="ri-settings-2-line"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown profile-user-dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-1.jpg') }}" alt=""
                                class="profile-user rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile <i
                                    class="ri-profile-line float-end text-muted"></i></a>
                            <a class="dropdown-item" href="#">Setting <i
                                    class="ri-settings-3-line float-end text-muted"></i></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out <i
                                    class="ri-logout-circle-r-line float-end text-muted"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end side-menu nav -->

            <div class="flex-lg-column d-none d-lg-block">
                <ul class="nav side-menu-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link light-dark-mode" href="#" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-placement="right" title="Dark / Light Mode">
                            <i class='ri-sun-line theme-mode-icon'></i>
                        </a>
                    </li>

                    <li class="nav-item btn-group dropup profile-user-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-1.jpg') }}"
                                alt="" class="profile-user rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile <i
                                    class="ri-profile-line float-end text-muted"></i></a>
                            <a class="dropdown-item" href="#">Setting <i
                                    class="ri-settings-3-line float-end text-muted"></i></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="auth-login.html">Log out <i
                                    class="ri-logout-circle-r-line float-end text-muted"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Side menu user -->
        </div>
        <!-- end left sidebar-menu -->

        <!-- start chat-leftsidebar -->
        <div class="chat-leftsidebar me-lg-1 ms-lg-0">

            <div class="tab-content">
                <!-- Start Profile tab-pane -->
                <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                    <!-- Start profile content -->
                    <div>
                        <div class="px-4 pt-4">
                            <div class="user-chat-nav float-end">
                                <div class="dropdown">
                                    <a href="#" class="font-size-18 text-muted dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">My Profile</h4>
                        </div>

                        <div class="text-center p-4 border-bottom">
                            <div class="mb-4">
                                <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-1.jpg') }}"
                                    class="rounded-circle avatar-lg img-thumbnail" alt="">
                            </div>

                            <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                            <p class="text-muted text-truncate mb-1"><i
                                    class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i>
                                Active</p>
                        </div>
                        <!-- End profile user -->

                        <!-- Start user-profile-desc -->
                        <div class="p-4 user-profile-desc" data-simplebar>
                            <div class="text-muted">
                                <p class="mb-4">If several languages coalesce, the grammar of the resulting language
                                    is more simple and regular than that of the individual.</p>
                            </div>


                            <div id="tabprofile" class="accordion">
                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="about2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#about" aria-expanded="true" aria-controls="about">
                                            <h5 class="font-size-14 m-0">
                                                <i
                                                    class="ri-user-2-line me-2 ms-0 ms-0 align-middle d-inline-block"></i>
                                                About
                                            </h5>
                                        </button>
                                    </div>
                                    <div id="about" class="accordion-collapse collapse show"
                                        aria-labelledby="about2" data-bs-parent="#tabprofile">
                                        <div class="accordion-body">
                                            <div>
                                                <p class="text-muted mb-1">Name</p>
                                                <h5 class="font-size-14">Patricia Smith</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Email</p>
                                                <h5 class="font-size-14">adc@123.com</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Time</p>
                                                <h5 class="font-size-14">11:40 AM</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Location</p>
                                                <h5 class="font-size-14 mb-0">California, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End About card -->

                                <div class="card accordion-item border">
                                    <div class="accordion-header" id="attachfile2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#attachfile"
                                            aria-expanded="false" aria-controls="attachfile">
                                            <h5 class="font-size-14 m-0">
                                                <i class="ri-attachment-line me-2 ms-0 ms-0 align-middle d-inline-block"></i>
                                                Attached Files
                                            </h5>
                                        </button>
                                    </div>
                                    <div id="attachfile" class="accordion-collapse collapse"
                                        aria-labelledby="attachfile2" data-bs-parent="#tabprofile">
                                        <div class="accordion-body">
                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0">
                                                        <div
                                                            class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                            <i class="ri-file-text-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">Admin-A.zip</h5>
                                                            <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                                                        </div>
                                                    </div>

                                                    <div class="ms-4 me-0">
                                                        <ul class="list-inline mb-0 font-size-18">
                                                            <li class="list-inline-item">
                                                                <a href="#" class="text-muted px-1">
                                                                    <i class="ri-download-2-line"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item dropdown">
                                                                <a class="dropdown-toggle text-muted px-1"
                                                                    href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another
                                                                        action</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0">
                                                        <div
                                                            class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                                                            <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                                                        </div>
                                                    </div>

                                                    <div class="ms-4 me-0">
                                                        <ul class="list-inline mb-0 font-size-18">
                                                            <li class="list-inline-item">
                                                                <a href="#" class="text-muted px-1">
                                                                    <i class="ri-download-2-line"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item dropdown">
                                                                <a class="dropdown-toggle text-muted px-1"
                                                                    href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another
                                                                        action</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0">
                                                        <div
                                                            class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                                                            <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                                                        </div>
                                                    </div>

                                                    <div class="ms-4 me-0">
                                                        <ul class="list-inline mb-0 font-size-18">
                                                            <li class="list-inline-item">
                                                                <a href="#" class="text-muted px-1">
                                                                    <i class="ri-download-2-line"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item dropdown">
                                                                <a class="dropdown-toggle text-muted px-1"
                                                                    href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another
                                                                        action</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0">
                                                        <div
                                                            class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                            <i class="ri-file-text-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                                                            <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                                                        </div>
                                                    </div>

                                                    <div class="ms-4 me-0">
                                                        <ul class="list-inline mb-0 font-size-18">
                                                            <li class="list-inline-item">
                                                                <a href="#" class="text-muted px-1">
                                                                    <i class="ri-download-2-line"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item dropdown">
                                                                <a class="dropdown-toggle text-muted px-1"
                                                                    href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-fill"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another
                                                                        action</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Attached Files card -->
                            </div>
                            <!-- end profile-user-accordion -->

                        </div>
                        <!-- end user-profile-desc -->
                    </div>
                    <!-- End profile content -->
                </div>
                <!-- End Profile tab-pane -->

                <!-- Start chats tab-pane -->
                <div class="tab-pane fade show active" id="pills-chat" role="tabpanel"
                    aria-labelledby="pills-chat-tab">
                    <!-- Start chats content -->
                    <div>
                        <div class="px-4 pt-4">
                            <h4 class="mb-4">Chats</h4>
                            <div class="search-box chat-search-box">
                                <div class="input-group mb-3 rounded-3">
                                    <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                        <i class="ri-search-line search-icon font-size-18"></i>
                                    </span>
                                    <input type="text" class="form-control bg-light"
                                        placeholder="Search messages or users" aria-label="Search messages or users"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div> <!-- Search Box-->
                        </div> <!-- .p-4 -->

                        <!-- Start user status -->
                        <div class="px-4 pb-4" dir="ltr">

                            <div class="owl-carousel owl-theme" id="user-status-carousel">
                                @foreach ($whatsapps as $whatsapp)
                                    <div class="item">
                                        <a href="#" class="user-status-box">
                                            <div class="avatar-xs mx-auto d-block chat-user-img online">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                    M
                                                </span>
                                                <span class="user-status"></span>
                                            </div>

                                            <h5 class="font-size-13 text-truncate mt-3 mb-1">Teresa</h5>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end user status carousel -->
                        </div>
                        <!-- end user status -->

                        <!-- Start chat-message-list -->
                        <div class="">
                            <h5 class="mb-3 px-3 font-size-16">Recent</h5>
                            <div class="chat-message-list px-2" data-simplebar>
                                <ul class="list-unstyled chat-list chat-user-list">
                                    @foreach ($whatsapps as $whatsapp)
                                        <li>
                                            <a href="#" class="whatsapp"
                                                data-whatsapp-id="{{ $whatsapp->id }}">
                                                <div class="d-flex">
                                                    <div class="chat-user-img align-self-center online me-3 ms-0">
                                                        <div class="avatar-xs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                M
                                                            </span>
                                                        </div>
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-15 mb-1 phone-number">
                                                            {{ $whatsapp->phone_number }}</h5>
                                                        <p class="chat-user-message text-truncate mb-0">
                                                            {{ $whatsapp->lastMessage->message }}</p>
                                                    </div>
                                                    <div class="font-size-11">12/07</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- End chat-message-list -->
                    </div>
                    <!-- Start chats content -->
                </div>
                <!-- End chats tab-pane -->

                <!-- Start groups tab-pane -->
                <div class="tab-pane" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">
                    <!-- Start Groups content -->
                    <div>
                        <div class="p-4">
                            <div class="user-chat-nav float-end">
                                <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create group">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-link text-decoration-none text-muted font-size-18 py-0"
                                        data-bs-toggle="modal" data-bs-target="#addgroup-exampleModal">
                                        <i class="ri-group-line me-1 ms-0"></i>
                                    </button>
                                </div>

                            </div>
                            <h4 class="mb-4">Groups</h4>

                            <!-- Start add group Modal -->
                            <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-size-16" id="addgroup-exampleModalLabel">
                                                Create New Group</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form>
                                                <div class="mb-4">
                                                    <label for="addgroupname-input" class="form-label">Group
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        id="addgroupname-input" placeholder="Enter Group Name">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Group Members</label>
                                                    <div class="mb-3">
                                                        <button class="btn btn-light btn-sm" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#groupmembercollapse"
                                                            aria-expanded="false" aria-controls="groupmembercollapse">
                                                            Select Members
                                                        </button>
                                                    </div>

                                                    <div class="collapse" id="groupmembercollapse">
                                                        <div class="card border">
                                                            <div class="card-header">
                                                                <h5 class="font-size-15 mb-0">Contacts</h5>
                                                            </div>
                                                            <div class="card-body p-2">
                                                                <div data-simplebar style="max-height: 150px;">
                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            A
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck1" checked>
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck1">Albert
                                                                                        Rodarte</label>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck2">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck2">Allison
                                                                                        Etter</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            C
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck3">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck3">Craig
                                                                                        Smiley</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            D
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck4">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck4">Daniel
                                                                                        Clay</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            I
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck5">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck5">Iris
                                                                                        Wells</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            J
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck6">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck6">Juan
                                                                                        Flakes</label>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck7">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck7">John
                                                                                        Hall</label>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck8">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck8">Joy
                                                                                        Southern</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            M
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck9">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck9">Michael
                                                                                        Hinton</label>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck10">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck10">Mary
                                                                                        Farmer</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            P
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck11">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck11">Phillis
                                                                                        Griffin</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            R
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck12">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck12">Rocky
                                                                                        Jackson</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div>
                                                                        <div class="p-3 fw-bold text-primary">
                                                                            S
                                                                        </div>

                                                                        <ul class="list-unstyled contact-list">
                                                                            <li>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        id="memberCheck13">
                                                                                    <label class="form-check-label"
                                                                                        for="memberCheck13">Simon
                                                                                        Velez</label>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="addgroupdescription-input"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="addgroupdescription-input" rows="3" placeholder="Enter Description"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Create Groups</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End add group Modal -->

                            <div class="search-box chat-search-box">
                                <div class="input-group rounded-3">
                                    <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                        <i class="ri-search-line search-icon font-size-18"></i>
                                    </span>
                                    <input type="text" class="form-control bg-light"
                                        placeholder="Search groups..." aria-label="Search groups..."
                                        aria-describedby="basic-addon1">
                                </div>
                            </div> <!-- Search Box-->
                        </div>

                        <!-- Start chat-group-list -->
                        <div class="p-4 chat-message-list chat-group-list" data-simplebar>


                            <ul class="list-unstyled chat-list">
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        G
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#General</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        R
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#Reporting <span
                                                        class="badge badge-soft-danger rounded-pill float-end">+23</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#Designers</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#Developers <span
                                                        class="badge badge-soft-danger rounded-pill float-end">New</span>
                                                </h5>
                                            </div>
                                        </div>

                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        P
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#Project-alpha</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="chat-user-img me-3 ms-0">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        B
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-0">#Snacks</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End chat-group-list -->
                    </div>
                    <!-- End Groups content -->
                </div>
                <!-- End groups tab-pane -->

                <!-- Start contacts tab-pane -->
                <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                    <!-- Start Contact content -->
                    <div>
                        <div class="p-4">
                            <div class="user-chat-nav float-end">
                                <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Contact">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-link text-decoration-none text-muted font-size-18 py-0"
                                        data-bs-toggle="modal" data-bs-target="#addContact-exampleModal">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </div>
                            <h4 class="mb-4">Contacts</h4>

                            <!-- Start Add contact Modal -->
                            <div class="modal fade" id="addContact-exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Add
                                                Contact</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="addcontactemail-input"
                                                        class="form-label">Email</label>
                                                    <input type="email" class="form-control"
                                                        id="addcontactemail-input" placeholder="Enter Email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="addcontact-invitemessage-input"
                                                        class="form-label">Invatation Message</label>
                                                    <textarea class="form-control" id="addcontact-invitemessage-input" rows="3" placeholder="Enter Message"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Invite Contact</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Add contact Modal -->

                            <div class="search-box chat-search-box">
                                <div class="input-group bg-light  input-group-lg rounded-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-link text-decoration-none text-muted pe-1 ps-3"
                                            type="button">
                                            <i class="ri-search-line search-icon font-size-18"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-light" placeholder="Search users..">
                                </div>
                            </div>
                            <!-- End search-box -->
                        </div>
                        <!-- end p-4 -->

                        <!-- Start contact lists -->
                        <div class="p-4 chat-message-list chat-group-list" data-simplebar>

                            <div>
                                <div class="p-3 fw-bold text-primary">
                                    A
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Albert Rodarte</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Allison Etter</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end contact list A -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    C
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Craig Smiley</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end contact list C -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    D
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Daniel Clay</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Doris Brown</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list D -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    I
                                </div>

                                <ul class="list-unstyled contact-list">

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Iris Wells</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end contact list I -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    J
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Juan Flakes</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">John Hall</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Joy Southern</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end contact list J -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    M
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Mary Farmer</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Mark Messer</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Michael Hinton</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list M -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    O
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Ossie Wilson</h5>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list O -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    P
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Phillis Griffin</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Paul Haynes</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list P -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    R
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Rocky Jackson</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list R -->

                            <div class="mt-3">
                                <div class="p-3 fw-bold text-primary">
                                    S
                                </div>

                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Sara Muller</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Simon Velez</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 m-0">Steve Walker</h5>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="text-muted dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share <i
                                                            class="ri-share-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Block <i
                                                            class="ri-forbid-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Remove <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end contact list S -->
                        </div>
                        <!-- end contact lists -->
                    </div>
                    <!-- Start Contact content -->
                </div>
                <!-- End contacts tab-pane -->

                <!-- Start settings tab-pane -->
                <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <!-- Start Settings content -->
                    <div>
                        <div class="px-4 pt-4">
                            <h4 class="mb-0">Settings</h4>
                        </div>

                        <div class="text-center border-bottom p-4">
                            <div class="mb-4 profile-user">
                                <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-1.jpg') }}"
                                    class="rounded-circle avatar-lg img-thumbnail" alt="">
                                <button type="button"
                                    class="btn btn-light bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                                    <i class="ri-pencil-fill"></i>
                                </button>
                            </div>

                            <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                            <div class="dropdown d-inline-block mb-1">
                                <a class="text-muted dropdown-toggle pb-1 d-block" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Available <i class="mdi mdi-chevron-down"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Available</a>
                                    <a class="dropdown-item" href="#">Busy</a>
                                </div>
                            </div>
                        </div>
                        <!-- End profile user -->

                        <!-- Start User profile description -->
                        <div class="p-4 user-profile-desc" data-simplebar>
                            <div id="settingprofile" class="accordion">
                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="personalinfo1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#personalinfo" aria-expanded="true"
                                            aria-controls="personalinfo">
                                            <h5 class="font-size-14 m-0">Personal Info</h5>
                                        </button>
                                    </div>
                                    <div id="personalinfo" class="accordion-collapse collapse show"
                                        aria-labelledby="personalinfo1" data-bs-parent="#settingprofile">
                                        <div class="accordion-body">
                                            <div class="float-end">
                                                <button type="button" class="btn btn-light btn-sm"><i
                                                        class="ri-edit-fill me-1 ms-0 align-middle"></i> Edit</button>
                                            </div>

                                            <div>
                                                <p class="text-muted mb-1">Name</p>
                                                <h5 class="font-size-14">Patricia Smith</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Email</p>
                                                <h5 class="font-size-14">adc@123.com</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Time</p>
                                                <h5 class="font-size-14">11:40 AM</h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">Location</p>
                                                <h5 class="font-size-14 mb-0">California, USA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end personal info card -->

                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="privacy1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#privacy"
                                            aria-expanded="false" aria-controls="privacy">
                                            <h5 class="font-size-14 m-0">Privacy</h5>
                                        </button>
                                    </div>
                                    <div id="privacy" class="accordion-collapse collapse"
                                        aria-labelledby="privacy1" data-bs-parent="#settingprofile">
                                        <div class="accordion-body">
                                            <div class="py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Profile photo</h5>
                                                    </div>
                                                    <div class="dropdown ms-2 me-0">
                                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Everyone <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Everyone</a>
                                                            <a class="dropdown-item" href="#">selected</a>
                                                            <a class="dropdown-item" href="#">Nobody</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>

                                                    </div>
                                                    <div class="ms-2 me-0">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="privacy-lastseenSwitch" checked>
                                                            <label class="form-check-label"
                                                                for="privacy-lastseenSwitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Status</h5>
                                                    </div>
                                                    <div class="dropdown ms-2 me-0">
                                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Everyone <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Everyone</a>
                                                            <a class="dropdown-item" href="#">selected</a>
                                                            <a class="dropdown-item" href="#">Nobody</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Read receipts</h5>
                                                    </div>
                                                    <div class="ms-2 me-0">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="privacy-readreceiptSwitch" checked>
                                                            <label class="form-check-label"
                                                                for="privacy-readreceiptSwitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3 border-top">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>

                                                    </div>
                                                    <div class="dropdown ms-2 me-0">
                                                        <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Everyone <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Everyone</a>
                                                            <a class="dropdown-item" href="#">selected</a>
                                                            <a class="dropdown-item" href="#">Nobody</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end privacy card -->

                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="security1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#security"
                                            aria-expanded="false" aria-controls="security">
                                            <h5 class="font-size-14 m-0"></i> Security</h5>
                                        </button>
                                    </div>
                                    <div id="security" class="accordion-collapse collapse"
                                        aria-labelledby="security1" data-bs-parent="#settingprofile">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-13 mb-0 text-truncate">Show security
                                                        notification</h5>

                                                </div>
                                                <div class="ms-2 me-0">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="security-notificationswitch">
                                                        <label class="form-check-label"
                                                            for="security-notificationswitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end security card -->

                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="help1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <h5 class="font-size-14 m-0"></i> Help</h5>
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="help1" data-bs-parent="#settingprofile">
                                        <div class="accordion-body">
                                            <div class="py-3">
                                                <h5 class="font-size-13 mb-0"><a href="#"
                                                        class="text-body d-block">FAQs</a></h5>
                                            </div>
                                            <div class="py-3 border-top">
                                                <h5 class="font-size-13 mb-0"><a href="#"
                                                        class="text-body d-block">Contact</a></h5>
                                            </div>
                                            <div class="py-3 border-top">
                                                <h5 class="font-size-13 mb-0"><a href="#"
                                                        class="text-body d-block">Terms & Privacy policy</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end profile-setting-accordion -->
                        </div>
                        <!-- End User profile description -->
                    </div>
                    <!-- Start Settings content -->
                </div>
                <!-- End settings tab-pane -->
            </div>
            <!-- end tab content -->

        </div>
        <!-- end chat-leftsidebar -->

        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden">
            <div class="d-lg-flex">

                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <div class="p-3 p-lg-4 border-bottom user-chat-topbar">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="d-block d-lg-none me-2 ms-0">
                                        <a href="javascript: void(0);"
                                            class="user-chat-remove text-muted font-size-16 p-2"><i
                                                class="ri-arrow-left-s-line"></i></a>
                                    </div>
                                    <div class="me-3 ms-0">
                                        <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-4.jpg') }}"
                                            class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-0 text-truncate"><a href="#"
                                                class="text-reset user-profile-show">Doris Brown</a> <i
                                                class="ri-record-circle-fill font-size-10 text-success d-inline-block ms-1"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ri-search-line"></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-md">
                                                <div class="search-box p-2">
                                                    <input type="text" class="form-control bg-light border-0"
                                                        placeholder="Search..">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target="#audiocallModal">
                                            <i class="ri-phone-line"></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target="#videocallModal">
                                            <i class="ri-vidicon-line"></i>
                                        </button>
                                    </li>

                                    {{-- <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn user-profile-show">
                                            <i class="ri-user-2-line"></i>
                                        </button>
                                    </li> --}}

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                    href="#">View profile <i
                                                        class="ri-user-2-line float-end text-muted"></i></a>
                                                <a class="dropdown-item d-block d-lg-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#audiocallModal">Audio <i
                                                        class="ri-phone-line float-end text-muted"></i></a>
                                                <a class="dropdown-item d-block d-lg-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#videocallModal">Video <i
                                                        class="ri-vidicon-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="#">Archive <i
                                                        class="ri-archive-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="#">Muted <i
                                                        class="ri-volume-mute-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="#">Delete <i
                                                        class="ri-delete-bin-line float-end text-muted"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end chat user head -->

                    <!-- start chat conversation -->
                    <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
                        <ul class="list-unstyled mb-0">

                            <li class="right">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-1.jpg') }}"
                                            alt="">
                                    </div>

                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    Good morning, How are you? What about our next meeting?
                                                </p>
                                                <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                                                    <span class="align-middle">10:02</span>
                                                </p>
                                            </div>

                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy <i
                                                            class="ri-file-copy-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Save <i
                                                            class="ri-save-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Forward <i
                                                            class="ri-chat-forward-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Delete <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="conversation-name">Patricia Smith</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end chat conversation end -->

                    <!-- start chat input section -->
                    <div class="chat-input-section p-3 p-lg-4 border-top mb-0">

                        <div class="row g-0">

                            <div class="col">
                                <input type="text" class="form-control form-control-lg bg-light border-light"
                                    placeholder="Enter Message..." id="messageInput">
                            </div>
                            <div class="col-auto">
                                <div class="chat-input-links ms-md-2 me-md-0">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Emoji">
                                            <button type="button"
                                                class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect">
                                                <i class="ri-emotion-happy-line"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Attached File">
                                            <button type="button" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect" id="triggerFileUpload">
                                                <i class="ri-attachment-line"></i>
                                            </button>
                                            <input type="file" id="fileInput" style="display: none;" />
                                        </li>

                                        <li class="list-inline-item">
                                            <button id="sendWhatsappMessageButton"
                                                class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
                                                <i class="ri-send-plane-2-fill"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end chat input section -->
                </div>
                <!-- end chat conversation section -->

                <!-- start User profile detail sidebar -->
                <div class="user-profile-sidebar">
                    <div class="px-3 px-lg-4 pt-3 pt-lg-4">
                        <div class="user-chat-nav text-end">
                            <button type="button" class="btn nav-btn" id="user-profile-hide">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-4 border-bottom">
                        <div class="mb-4">
                            <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-4.jpg') }}"
                                class="rounded-circle avatar-lg img-thumbnail" alt="">
                        </div>

                        <h5 class="font-size-16 mb-1 text-truncate">Doris Brown</h5>
                        <p class="text-muted text-truncate mb-1"><i
                                class="ri-record-circle-fill font-size-10 text-success me-1 ms-0"></i> Active</p>
                    </div>
                    <!-- End profile user -->

                    <!-- Start user-profile-desc -->
                    <div class="p-4 user-profile-desc" data-simplebar>
                        <div class="text-muted">
                            <p class="mb-4">If several languages coalesce, the grammar of the resulting language is
                                more simple and regular than that of the individual.</p>
                        </div>

                        <div class="accordion" id="myprofile">

                            <div class="accordion-item card border mb-2">
                                <div class="accordion-header" id="about3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#aboutprofile" aria-expanded="true"
                                        aria-controls="aboutprofile">
                                        <h5 class="font-size-14 m-0">
                                            <i class="ri-user-2-line me-2 ms-0 align-middle d-inline-block"></i> About
                                        </h5>
                                    </button>
                                </div>
                                <div id="aboutprofile" class="accordion-collapse collapse show"
                                    aria-labelledby="about3" data-bs-parent="#myprofile">
                                    <div class="accordion-body">
                                        <div>
                                            <p class="text-muted mb-1">Name</p>
                                            <h5 class="font-size-14">Doris Brown</h5>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-muted mb-1">Email</p>
                                            <h5 class="font-size-14">adc@123.com</h5>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-muted mb-1">Time</p>
                                            <h5 class="font-size-14">11:40 AM</h5>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-muted mb-1">Location</p>
                                            <h5 class="font-size-14 mb-0">California, USA</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card border">
                                <div class="accordion-header" id="attachfile3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#attachprofile"
                                        aria-expanded="false" aria-controls="attachprofile">
                                        <h5 class="font-size-14 m-0">
                                            <i class="ri-attachment-line me-2 ms-0 align-middle d-inline-block"></i>
                                            Attached Files
                                        </h5>
                                    </button>
                                </div>
                                <div id="attachprofile" class="accordion-collapse collapse"
                                    aria-labelledby="attachfile3" data-bs-parent="#myprofile">
                                    <div class="accordion-body">
                                        <div class="card p-2 border mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-3 ms-0">
                                                    <div
                                                        class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                        <i class="ri-file-text-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="text-start">
                                                        <h5 class="font-size-14 mb-1">admin_v1.0.zip</h5>
                                                        <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                                                    </div>
                                                </div>

                                                <div class="ms-4 me-0">
                                                    <ul class="list-inline mb-0 font-size-18">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-muted px-1">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle text-muted px-1"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card p-2 border mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-3 ms-0">
                                                    <div
                                                        class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="text-start">
                                                        <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                                                        <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                                                    </div>
                                                </div>

                                                <div class="ms-4 me-0">
                                                    <ul class="list-inline mb-0 font-size-18">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-muted px-1">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle text-muted px-1"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card p-2 border mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-3 ms-0">
                                                    <div
                                                        class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="text-start">
                                                        <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                                                        <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                                                    </div>
                                                </div>

                                                <div class="ms-4 me-0">
                                                    <ul class="list-inline mb-0 font-size-18">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-muted px-1">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle text-muted px-1"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card p-2 border mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-3 ms-0">
                                                    <div
                                                        class="avatar-title bg-primary-subtle text-primary rounded font-size-20">
                                                        <i class="ri-file-text-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="text-start">
                                                        <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                                                        <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                                                    </div>
                                                </div>

                                                <div class="ms-4 me-0">
                                                    <ul class="list-inline mb-0 font-size-18">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-muted px-1">
                                                                <i class="ri-download-2-line"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle text-muted px-1"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end profile-user-accordion -->
                        </div>
                        <!-- end user-profile-desc -->
                    </div>
                    <!-- end User profile detail sidebar -->
                </div>
            </div>
            <!-- End User chat -->

            <!-- audiocall Modal -->
            <div class="modal fade" id="audiocallModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center p-4">
                                <div class="avatar-lg mx-auto mb-4">
                                    <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-4.jpg') }}"
                                        alt="" class="img-thumbnail rounded-circle">
                                </div>

                                <h5 class="text-truncate">Doris Brown</h5>
                                <p class="text-muted">Start Audio Call</p>

                                <div class="mt-5">
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item px-2 me-2 ms-0">
                                            <button type="button" class="btn btn-danger avatar-sm rounded-circle"
                                                data-bs-dismiss="modal">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-close-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-phone-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- audiocall Modal -->

            <!-- videocall Modal -->
            <div class="modal fade" id="videocallModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center p-4">
                                <div class="avatar-lg mx-auto mb-4">
                                    <img src="{{ asset('assets-admin/assets-chat/images/users/avatar-4.jpg') }}"
                                        alt="" class="img-thumbnail rounded-circle">
                                </div>

                                <h5 class="text-truncate">Doris Brown</h5>
                                <p class="text-muted mb-0">Start Video Call</p>

                                <div class="mt-5">
                                    <ul class="list-inline mb-1">
                                        <li class="list-inline-item px-2 me-2 ms-0">
                                            <button type="button" class="btn btn-danger avatar-sm rounded-circle"
                                                data-bs-dismiss="modal">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-close-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <button type="button" class="btn btn-success avatar-sm rounded-circle">
                                                <span class="avatar-title bg-transparent font-size-20">
                                                    <i class="ri-vidicon-fill"></i>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>

        <!-- end  layout wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets-admin/assets-chat/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets-admin/assets-chat/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets-admin/assets-chat/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets-admin/assets-chat/libs/node-waves/waves.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('assets-admin/assets-chat/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('assets-admin/assets-chat/libs/owl.carousel/owl.carousel.min.js') }}"></script>

        <!-- page init -->
        <script src="{{ asset('assets-admin/assets-chat/js/pages/index.init.js') }}"></script>

        <script src="{{ asset('assets-admin/assets-chat/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script>
            $(document).ready(function() {
                var phoneNumber = null;

                $('.whatsapp').click(function(e) {
                    e.preventDefault();
                    handleWhatsAppChat($(this).data('whatsapp-id'), $(this).find('.phone-number').text());
                });

                function handleWhatsAppChat(whatsAppRoomId, groupName) {
                    // assign the phone number to the chat room
                    this.phoneNumber = groupName;

                    var chatHeader = $('.user-profile-show');
                    var chatBody = $('.user-chat-content');
                    $('#receiver_id').val(whatsAppRoomId);
                    chatBody.empty();

                    chatHeader.text(groupName);
                    chatHeader.find('.media-left img').remove(); // Remove user image for group chat

                    listenForWhatsAppMessages(whatsAppRoomId, groupName);
                }

                function listenForWhatsAppMessages(roomId) {
                    $.ajax({
                        url: '{{ route('whatsapp.room') }}', // Ensure this route is correctly defined in your Laravel routes
                        method: 'GET',
                        data: {
                            roomId: roomId,
                            _token: '{{ csrf_token() }}' // Correct way to include CSRF token in a Laravel project
                        },
                        success: function(response) {
                            console.log(response.message);
                            var chatBody = $('.user-chat-content');
                            var messages = response.message.messages;
                            var otherUserImage = $('#imageUser').data('user-image');

                            messages.forEach(function(message) {
                                var timeAgo = moment(message.updated_at)
                            .fromNow(); // Convert ISO date to relative time
                                var media =
                                    `<div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    ${message.message}
                                                </p>
                                                <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                                                    <span class="align-middle">${timeAgo}</span></p>
                                            </div>

                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy <i
                                                            class="ri-file-copy-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Save <i
                                                            class="ri-save-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Forward <i
                                                            class="ri-chat-forward-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Delete <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name">Patricia Smith</div>
                                    </div>`;

                                chatBody.append(media); // Append each message as it's created
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error creating room:', error);
                        }
                    });
                }
                // Handle send message button click for user chat
                $('#sendWhatsappMessageButton').click(function() {
                    var messageText = $('#messageInput').val();
                    if (!messageText.trim()) {
                        return; // Do not send empty messages
                    }
                    sendwhatsapp(messageText);
                    $('#messageInput').val(''); // Clear the input field
                });

                function sendwhatsapp(messageText) {
                    $.ajax({
                        url: '{{ route('send-whatsapp-message') }}',
                        method: 'POST',
                        data: {
                            phone: this.phoneNumber,
                            message : messageText,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            var chatBody = $('.user-chat-content');
                            console.log(response);
                            var timeAgo = moment(response.message.updated_at)
                            var media =
                                    `<div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    ${response.message.message}
                                                </p>
                                                <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                                                    <span class="align-middle">${timeAgo}</span></p>
                                            </div>

                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy <i
                                                            class="ri-file-copy-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Save <i
                                                            class="ri-save-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Forward <i
                                                            class="ri-chat-forward-line float-end text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Delete <i
                                                            class="ri-delete-bin-line float-end text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name">Patricia Smith</div>
                                    </div>`;
                            chatBody.append(media); // Append each message as it's created
                        },
                        error: function(xhr, status, error) {
                            console.error('Error creating room:', error);
                        }
                    });
                }

                document.getElementById('triggerFileUpload').addEventListener('click', function() {
                    document.getElementById('fileInput').click(); // Trigger the hidden file input
                });

            });
        </script>
</body>

</html>

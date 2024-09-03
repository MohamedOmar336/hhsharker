<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">


<!-- Mirrored from themesbrand.com/chatvia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2024 06:58:02 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive Bootstrap 5 Chat App" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- magnific-popup css -->
    <link href="{{ asset('assets-admin/assets-chat/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/assets-chat/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/assets-chat/libs/owl.carousel/assets/owl.theme.default.min.css') }} ">
        @if (app()->isLocale('ar'))
         <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/assets-chat/css/bootstrap-chat-rtl.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets-admin/assets-chat/css/chat-rtl.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@else
        <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/assets-chat/css/bootstrap-chat.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets-admin/assets-chat/css/chat.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endif

<!-- Icons Css -->
<link href="{{ asset('assets-admin/assets-chat/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
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
                </ul>
            </div>
            <!-- end side-menu nav -->

            <div class="flex-lg-column d-none d-lg-block">
                <ul class="nav side-menu-nav justify-content-center">
                    {{-- <li class="nav-item">
                        <a class="nav-link light-dark-mode" href="#" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-placement="right" title="Dark / Light Mode">
                            <i class='ri-sun-line theme-mode-icon'></i>
                        </a>
                    </li> --}}

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
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('general.attributes.edit') }}</a>
                                        <a class="dropdown-item" href="#">{{ __('general.attributes.action') }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">{{ __('general.attributes.another_action') }}</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">{{ __('general.attributes.my_profile') }}</h4>
                        </div>

                        <div class="text-center p-4 border-bottom">
                            <div class="mb-4">
                                <img src="{{ asset('images/' . auth()->user()->image) }}"
                                    class="rounded-circle avatar-lg img-thumbnail" alt="">
                            </div>

                            <h5 class="font-size-16 mb-1 text-truncate">
                                {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</h5>
                            <p class="text-muted text-truncate mb-1"><i
                                    class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i>
                                    {{ __('general.attributes.active') }}</p>
                        </div>
                        <!-- End profile user -->

                        <!-- Start user-profile-desc -->
                        <div class="p-4 user-profile-desc" data-simplebar>
                            <div id="tabprofile" class="accordion">
                                <div class="accordion-item card border mb-2">
                                    <div class="accordion-header" id="about2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#about" aria-expanded="true" aria-controls="about">
                                            <h5 class="font-size-14 m-0">
                                                <i
                                                    class="ri-user-2-line me-2 ms-0 ms-0 align-middle d-inline-block"></i>
                                                    {{ __('general.attributes.about') }}
                                            </h5>
                                        </button>
                                    </div>
                                    <div id="about" class="accordion-collapse collapse show"
                                        aria-labelledby="about2" data-bs-parent="#tabprofile">
                                        <div class="accordion-body">
                                            <div>
                                                <p class="text-muted mb-1">{{ __('general.attributes.name') }}</p>
                                                <h5 class="font-size-14">
                                                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                                                </h5>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-muted mb-1">{{ __('general.attributes.email') }}</p>
                                                <h5 class="font-size-14">{{ auth()->user()->email }}</h5>
                                            </div>
                                            @php
                                                $now = new \DateTime();
                                            @endphp
                                            @endphp
                                            <div class="mt-4">
                                                <p class="text-muted mb-1">{{ __('general.attributes.time') }}</p>
                                                <h5 class="font-size-14">{{ $now->format('Y-m-d H:i:s') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End About card -->
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
                            <h4 class="mb-4">{{ __('general.attributes.chats') }}</h4>
                            <div class="search-box chat-search-box">
                                <div class="input-group mb-3 rounded-3">
                                    <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                        <i class="ri-search-line search-icon font-size-18"></i>
                                    </span>
                                    <input dir="auto" type="text" class="form-control bg-light"
                                        placeholder="Search messages or users" aria-label="Search messages or users"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div> <!-- Search Box-->
                        </div> <!-- .p-4 -->

                        <!-- Start user status -->
                        <div class="px-4 pb-4" dir="ltr">

                            <div class="owl-carousel owl-theme" id="user-status-carousel">
                                @foreach ($contacts as $contact)
                                    <div class="item">
                                        <a href="#" class="user-status-box">
                                            <div class="avatar-xs mx-auto d-block chat-user-img online">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                    {{ strtoupper($contact->name[0]) }}
                                                    <!-- Displays the first letter of the name, capitalized -->
                                                </span>
                                                <span class="user-status"></span>
                                            </div>

                                            <h5 class="font-size-13 text-truncate mt-3 mb-1">{{ $contact->name }}</h5>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end user status carousel -->
                        </div>
                        <!-- end user status -->

                        <!-- Start chat-message-list -->
                        <div class="">
                            <h5 class="mb-3 px-3 font-size-16">{{ __('general.attributes.recent') }}</h5>
                            <div class="chat-message-list px-2" data-simplebar>
                                <ul class="list-unstyled chat-list chat-user-list">
                                    @foreach ($contacts as $contact)
                                        <li>
                                            <a href="#" class="whatsapp"
                                                data-whatsapp-id="{{ $contact->id }}"
                                                data-user-name="{{ $contact->name }}"
                                                data-user-email="{{ $contact->email }}" data-user-status="Active"
                                                data-user-image="{{ asset('storage/' . $contact->image) }}"
                                                data-user-location="{{ $contact->address }}"
                                                data-last-interaction="{{ $contact->last_interaction }}">
                                                <div class="d-flex">
                                                    <div class="chat-user-img align-self-center online me-3 ms-0">
                                                        <div class="avatar-xs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                {{ strtoupper($contact->name[0]) }}
                                                                <!-- Displays the first letter of the name, capitalized -->
                                                            </span>
                                                        </div>
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-15 mb-1 user-name">
                                                            {{ $contact->name }}</h5>
                                                        <p class="chat-user-message text-truncate mb-0 phone-number">
                                                            {{ $contact->phone }} </p>
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
                                    <div class="avatar-xs">
                                        <span
                                            class="avatar-title rounded-circle bg-primary-subtle text-primary image-text">
                                            M
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-0 text-truncate"><a href="#"
                                                class="text-reset user-profile-show"> Doris Browns</a> <i
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
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-search-line"></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-md">
                                                <div class="search-box p-2">
                                                    <input dir="auto" type="text" class="form-control bg-light border-0"
                                                        placeholder="Search..">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                    href="#">View profile <i
                                                        class="ri-user-2-line float-end text-muted"></i></a>
                                                <a class="dropdown-item d-block d-lg-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#audiocallModal">{{ __('general.attributes.audio') }} <i
                                                        class="ri-phone-line float-end text-muted"></i></a>
                                                <a class="dropdown-item d-block d-lg-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#videocallModal">{{ __('general.attributes.video') }} <i
                                                        class="ri-vidicon-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="#">{{ __('general.attributes.archive') }} <i
                                                        class="ri-archive-line float-end text-muted"></i></a>
                                                {{-- <a class="dropdown-item" href="#">{{ __('general.attributes.muted') }} <i
                                                        class="ri-volume-mute-line float-end text-muted"></i></a>
                                                <a class="dropdown-item" href="#">{{ __('general.attributes.delete') }} <i
                                                        class="ri-delete-bin-line float-end text-muted"></i></a> --}}
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

                        <ul class="list-unstyled mb-0" id="append-messages">
                            <div id="loader-wrapper">
                                <img src="{{ asset('assets-admin/images/loader.gif') }}" alt="">
                            </div>
                        </ul>
                    </div>
                    <!-- end chat conversation end -->

                    <!-- start chat input section -->
                    <div class="chat-input-section p-3 p-lg-4 border-top mb-0">

                        <div class="row g-0">

                            <div class="col">
                                <input dir="auto" type="text" class="form-control form-control-lg bg-light border-light"
                                    placeholder="Enter Message..." id="messageInput">
                            </div>
                            <div class="col-auto">
                                <div class="chat-input-links ms-md-2 me-md-0">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Attached File">
                                            <button type="button"
                                                class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect"
                                                id="triggerFileUpload">
                                                <i class="ri-attachment-line"></i>
                                            </button>
                                            <input type="file" id="fileInput" style="display: none;" />
                                        </li>

                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                            title="Send the Template">
                                            <button id="sendWhatsappTemplateButton"
                                                class="btn btn-link font-size-11 btn-lg  waves-effect">
                                                <i class="ri-send-plane-2-fill"></i>
                                            </button>
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
                        <div class="avatar-xs" style="margin-inline: auto;height:3.2rem;width:3.2rem;">
                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary image-text">
                            </span>
                        </div>

                        <h5 class="font-size-16 mb-1 text-truncate">Doris Brown</h5>
                        <p class="text-muted text-truncate mb-1"><i
                                class="ri-record-circle-fill font-size-10 text-success me-1 ms-0"></i> Active</p>
                    </div>
                    <!-- End profile user -->

                    <!-- Start user-profile-desc -->
                    <div class="p-4 user-profile-desc" data-simplebar>
                        <div class="text-muted">
                            <p class="mb-4 address-profile">If several languages coalesce, the grammar of the resulting
                                language is
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
                                            <h5 class="font-size-14 user-neme-about">Doris Brown</h5>
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

        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>

        <script src="{{ asset('assets-admin/assets-chat/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script>

            var whatAppId = $('.whatsapp').first().data('whatsapp-id');
            // Initialize Firebase
            firebase.initializeApp({
                apiKey: "AIzaSyDXrOKuqnjDvWm8IZ2r3wM8ZY_fG_QamOg",
                authDomain: "hhshaker-282b0.firebaseapp.com",
                projectId: "hhshaker-282b0",
                storageBucket: "hhshaker-282b0.appspot.com",
                messagingSenderId: "567064391154",
                appId: "1:567064391154:web:40574f6824350b17764f6b",
                measurementId: "G-N2VKVTGWMX"
            });
            @foreach ($contacts as $contact)
                firebase.database().ref('/path/to/messages/{{ $contact->id }}').on('child_added', function(snapshot) {
                    var message = snapshot.val();
                    if (whatAppId == message.contact_id) {
                        console.log(message , 55555555555); // Log the message to debug
                        var timeAgo = moment(message.timestamp).fromNow(); // Assuming `timestamp` is stored correctly
                        var media = `<li>
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p dir="auto" class="mb-0">
                                                            ${message.message}
                                                        </p>
                                                        <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">${timeAgo}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>`;
                        $('#append-messages').append(media); // Append each message as it's created

                        var chatBox = $('#append-messages').closest('.simplebar-content-wrapper'); // Use closest to ensure you select the correct parent
                        var lastConversation = $('#append-messages').find('.conversation-list:last'); // Target the last conversation element
                        if (lastConversation.length) {
                            chatBox.scrollTop(lastConversation.position().top + chatBox.scrollTop());
                        }
                    }
                });
            @endforeach

        </script>
        <script>
            $(document).ready(function() {
                var phoneNumber = null;

                $('.whatsapp').click(function(e) {
                    e.preventDefault();

                    whatAppId = $(this).data('whatsapp-id');
                    console.log(whatAppId , 8888888888888888888);
                    var userName = $(this).data('user-name');
                    var userEmail = $(this).data('user-email');
                    var userStatus = $(this).data('user-status');
                    var userLocation = $(this).data('user-location');
                    var lastInteraction = $(this).data('last-interaction');
                    var userAddress = $(this).data('user-location');
                    // Update the sidebar with the contact's information
                    $('.user-profile-sidebar .font-size-16').text(userName);
                    $('.user-profile-sidebar .email-info').text(userEmail);
                    $('.user-profile-sidebar .location-info').text(userLocation);
                    $('.user-profile-sidebar .last-interaction-info').text(lastInteraction);
                    $('.address-profile').text(userAddress);
                    $('.user-profile-sidebar .text-muted.text-truncate').html(
                        `<i class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i> ${userStatus}`
                        );

                    // Update the sidebar with the contact's information
                    $('.user-neme-about').text(userName);
                    $('.user-profile-sidebar .text-muted.mb-1:contains("Email")').next().text(userEmail);
                    $('.user-profile-sidebar .text-muted.mb-1:contains("Location")').next().text(userLocation);
                    $('.user-profile-sidebar .address-profile').text(userAddress);
                    $('.user-profile-sidebar .text-muted.text-truncate').html(
                        `<i class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i> ${userStatus}`
                        );

                    // Update the avatar title dynamically with the first letter of the name
                    $('.user-profile-sidebar .avatar-title').text(userName[0].toUpperCase());
                    handleWhatsAppChat($(this).data('whatsapp-id'), $(this).find('.phone-number').text());

                });

                function handleWhatsAppChat(whatsAppRoomId, groupName) {
                    // assign the phone number to the chat room
                    this.phoneNumber = groupName;

                    var chatHeader = $('.user-profile-show');
                    var chatBody = $('#append-messages');
                    $('#receiver_id').val(whatsAppRoomId);
                    chatBody.empty();
                    chatBody.append( `<div id="loader-wrapper">
                    <img src="{{ asset('assets-admin/images/loader.gif') }}" alt="">
                    </div>` );
                    chatHeader.text(groupName);
                    chatHeader.find('.media-left img').remove(); // Remove user image for group chat

                    listenForWhatsAppMessages(whatsAppRoomId, groupName);
                }

                function listenForWhatsAppMessages(roomId) {
                    console.log(this.phoneNumber);
                    $.ajax({
                        url: '{{ route('whatsapp.room') }}', // Ensure this route is correctly defined in your Laravel routes
                        method: 'GET',
                        data: {
                            roomId: roomId,
                            phoneNumber: this.phoneNumber,
                            _token: '{{ csrf_token() }}' // Correct way to include CSRF token in a Laravel project
                        },
                        success: function(response) {
                            var chatBodyNew = $('#append-messages');
                            var messages = response.message.messages;

                            $.each(messages, function(index, message) {
                                var timeAgo = moment(message.updated_at).fromNow();
                                var media = message.direction === 'outgoing' ?
                                    `<li class="right">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="{{ asset('images/' . auth()->user()->image) }}" alt="">
                                        </div>
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p dir="auto" class="mb-0">${message.message}</p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">${timeAgo}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>` :
                                    `<li>
                                    <div class="conversation-list">
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p dir="auto" class="mb-0">${message.message}</p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">${timeAgo}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>`;

                                chatBodyNew.append(media);
                            });

                            // Ensure all messages have been processed and appended
                            chatBodyNew.promise().done(function() {
                                console.log(66666666666666);
                                scrollToLastConversation(); // Scroll to the last conversation in the chat
                                $('#loader-wrapper').hide(); // Hide the loader after updating the UI
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error creating room:', error);
                        }
                    });
                }

                function scrollToLastConversation() {
                    var chatBox = $('#append-messages').closest('.simplebar-content-wrapper'); // Use closest to ensure you select the correct parent
                    var lastConversation = $('#append-messages').find('.conversation-list:last'); // Target the last conversation element
                    if (lastConversation.length) {
                        chatBox.scrollTop(lastConversation.position().top + chatBox.scrollTop());
                    }
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
                    console.log('sendwhatsapp called'); // Check how many times this gets logged
                    $.ajax({
                        url: '{{ route('send-whatsapp-message') }}',
                        method: 'POST',
                        data: {
                            phone: this.phoneNumber,
                            message: messageText,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            var chatBodyMessage = $('#append-messages');
                            console.log('AJAX success', response);
                            var timeAgo = moment(response.message.updated_at)
                                .fromNow(); // Make sure you convert the time correctly
                            var media = `
                            <li class="right">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="{{ asset('images/' . auth()->user()->image) }}" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p dir="auto" class="mb-0">${response.message.message}</p>
                                                <p class="chat-time mb-0">
                                                    <i class="ri-time-line align-middle"></i>
                                                    <span class="align-middle">${timeAgo}</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>`;
                            chatBodyMessage.append(media);
                            scrollToLastConversation(); // Scroll to the last conversation in the chat

                        },
                        error: function(xhr, status, error) {
                            console.error('Error sending message:', error);
                        }
                    });
                }


                // Handle send message button click for user chat
                $('#sendWhatsappTemplateButton').click(function() {

                    sendwhatsappTemplate();
                    $('#messageInput').val(''); // Clear the input field
                    scrollToLastConversation(); // Scroll to the last conversation in the chat

                });

                function sendwhatsappTemplate() {
                    $.ajax({
                        url: '{{ route('whatsapp.template') }}',
                        method: 'POST',
                        data: {
                            phone: this.phoneNumber,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log(response);
                            var chatBodyTemplate = $('.user-chat-content');
                            var timeAgo = moment(response.message.updated_at)
                            var template =
                                `<div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p dir="auto" class="mb-0">
                                                    ${response.message.message}
                                                </p>
                                                <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                                                    <span class="align-middle">${timeAgo}</span></p>
                                            </div>
                                        </div>
                                    </div>`;
                            chatBodyTemplate.append(template); // Append each message as it's created
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

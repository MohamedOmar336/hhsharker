<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a class='logo logo-metrica d-block text-center' href='{{ route('home') }}'>
            <span>
                @if (app()->isLocale('ar'))
                <img src="{{ asset('assets-admin/images/IMG_1520.png') }}" alt="logo-small" class="logo-sm">
                @endif
                @if (app()->isLocale('en'))
                <img src="{{ asset('assets-admin/images/IMG_1520.png') }}" alt="logo-small" class="logo-sm">
                @endif


            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                        data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Ticket"
                        data-bs-trigger="hover">
                        <a href="#MetricaTicket" id="ticket-tab" class="nav-link">
                            <i class="ti ti-ticket menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->


                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Customer Interaction"
                        data-bs-trigger="hover">
                        <a href="#MetricaProfile" id="Profile-tab" class="nav-link">
                            <i class="ti ti-user menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Contacts"
                        data-bs-trigger="hover">
                        <a href="#MetricaContacts" id="Contacts-tab" class="nav-link">
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Chat"
                        data-bs-trigger="hover">
                        <a href="#MetricaChat" id="chat-tab" class="nav-link">
                            <i class="mdi mdi-chat menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Products details"
                        data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="External"
                        data-bs-trigger="hover">
                        <a href="#MetricaInternal" id="Internal-tab" class="nav-link">
                            <i class="ti ti-planet menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="SystemSettings"
                        data-bs-trigger="hover">
                        <a href="#MetricaSettings" id="Settings-tab" class="nav-link">
                            <i class="ti ti-settings menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item--> --}}

                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
            <a href="#" class="profile">
                <img src="{{ Auth::user()->image ? asset('images/' . Auth::user()->image) : asset('assets-admin/images/user.png') }}"
                    alt="profile-user" class="rounded-circle thumb-sm">
            </a>
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a class='logo' href='{{ route('home') }}'>
                <span>
                    @if (app()->isLocale('ar'))
                        <img src="{{ asset('assets-admin/images/IMG_1521.png') }}" alt="logo-large"
                            class="logo-lg logo-dark">
                    @endif
                    @if (app()->isLocale('en'))
                        <img src="{{ asset('assets-admin/images/IMG_1468.png') }}" alt="logo-large"
                            class="logo-lg logo-dark">
                    @endif
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->

        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link' href="{{ route('home') }}">{{ __('general.dashboard') }}</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        @foreach ($filteredSideNav as $item)
                            @if ($item['link'] != 'sidebartickets' && $item['link'] != 'sidebarContacts' && $item['link'] != 'sidebargroups' && $item['link'] != 'sidebarMails' && $item['link'] != 'sidebarappointments' && $item['link'] != 'sidebarCategoryTicket')
                                <li class="nav-item">
                                    <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                    <div class="collapse " id="{{ $item['link'] }}">
                                        <ul class="nav flex-column">
                                            @foreach ($item['sub_menu'] as $sub_item)
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->
                            @endif
                        @endforeach
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="MetricaTicket" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="ticket-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebartickets' || $item['link'] == 'sidebarCategoryTicket')
                                <li class="nav-item">
                                <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                    {{ $item['title'] }}
                                </a>
                                <div class="collapse " id="{{ $item['link'] }}">
                                    <ul class="nav flex-column">
                                        @foreach ($item['sub_menu'] as $sub_item)
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->
                        @endif
                    @endforeach
                </ul><!--end navbar-nav--->
            </div><!-- end Dashboards -->

            <div id="MetricaContacts" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="contact-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarContacts' || $item['link'] == 'sidebargroups')
                                <li class="nav-item">
                                <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                    {{ $item['title'] }}
                                </a>
                                <div class="collapse " id="{{ $item['link'] }}">
                                    <ul class="nav flex-column">
                                        @foreach ($item['sub_menu'] as $sub_item)
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->
                        @endif
                    @endforeach
                </ul><!--end navbar-nav--->
            </div><!-- end Dashboards -->


            <div id="MetricaChat" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="chat-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link'
                            href="{{ route('chat.index', Auth()->user()) }}">{{ __('general.chat') }}</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->

            </div><!-- end Dashboards -->

            <div id="MetricaProfile" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="profile-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>
                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                            @if ( $item['link'] == 'sidebarMails' || $item['link'] == 'sidebarappointments')
                                <li class="nav-item">
                                <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                    {{ $item['title'] }}
                                </a>
                                <div class="collapse " id="{{ $item['link'] }}">
                                    <ul class="nav flex-column">
                                        @foreach ($item['sub_menu'] as $sub_item)
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->
                        @endif
                    @endforeach
                </ul><!--end navbar-nav--->


                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link'
                            href="{{ route('calendar.index') }}">{{ __('general.attributes.calendar') }}</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->

            </div><!-- end Dashboards -->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>

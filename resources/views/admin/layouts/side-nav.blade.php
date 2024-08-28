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
                            <i class="ti ti-dashboard menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="External"
                        data-bs-trigger="hover">
                        <a href="#MetricaExternal" id="External-tab" class="nav-link">
                            <i class="ti ti-folder menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Internal"
                        data-bs-trigger="hover">
                        <a href="#MetricaInternal" id="Internal-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->


                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Website"
                        data-bs-trigger="hover">
                        <a href="#MetricaWebsite" id="Website-tab" class="nav-link">
                            <i class="ti ti-world menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="System"
                        data-bs-trigger="hover">
                        <a href="#MetricaSystem" id="System-tab" class="nav-link">
                            <i class="ti ti-settings menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile"
                        data-bs-trigger="hover">
                        <a href='#MetricaProfile' id="Profile-tab" class="nav-link">
                            <i class="ti ti-user menu-icon"></i>
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

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link' href="{{ route('analytics') }}">{{ __('general.analytics') }}</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id="MetricaExternal" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="External-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarTickets' || $item['link'] == 'sidebarCustomerInteraction')
                                <li class="nav-item">
                                    <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                    <div class="collapse " id="{{ $item['link'] }}">
                                        <ul class="nav flex-column">
                                            @if (isset($item['sub_menu']))
                                                @foreach ($item['sub_menu'] as $sub_item)
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->
                            @endif
                        @endforeach


                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarHospital">
                                {{ __('general.contacts') }}
                            </a>
                            <div class="collapse " id="sidebarHospital">
                                <ul class="nav flex-column">
                                    @foreach ($filteredSideNav as $item)
                                        @if ($item['link'] == 'sidebarContacts' || $item['link'] == 'sidebarGroups')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ $item['link'] }}"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="{{ $item['link'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                                <div class="collapse " id="{{ $item['link'] }}">
                                                    <ul class="nav flex-column">
                                                        @if (isset($item['sub_menu']))
                                                            @foreach ($item['sub_menu'] as $sub_item)
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarEcommerce-->
                                            </li><!--end nav-item-->
                                        @endif

                                    @endforeach

                                </ul><!--end nav-->
                            </div><!--end sidebarHospital-->
                        </li><!--end nav-item-->

                        
                        @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarTasks')
                                <li class="nav-item">
                                    <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                    <div class="collapse " id="{{ $item['link'] }}">
                                        <ul class="nav flex-column">
                                            @if (isset($item['sub_menu']))
                                                @foreach ($item['sub_menu'] as $sub_item)
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->
                            @endif
                        @endforeach
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="MetricaInternal" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="Internal-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarTeamSettings')
                                <li class="nav-item">
                                    <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="{{ $item['link'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                    <div class="collapse " id="{{ $item['link'] }}">
                                        <ul class="nav flex-column">
                                            @if (isset($item['sub_menu']))
                                                @foreach ($item['sub_menu'] as $sub_item)
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->
                            @endif

                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarHospital">
                                {{ __('general.tickets_settings') }}
                            </a>
                            <div class="collapse " id="sidebarHospital">
                                <ul class="nav flex-column">
                                    @foreach ($filteredSideNav as $item)
                                        {{-- @if ($item['link'] == 'sidebarContacts' || $item['link'] == 'sidebarGroups' || $item['link'] == 'sidebarTickets' || $item['link'] == 'sidebarCustomerInteraction' || $item['link'] == 'sidebarCustomerInteraction') --}}
                                        @if ($item['link'] == 'sidebarStatusSettings' || $item['link'] == 'sidebarPrioritySettings'|| $item['link'] =='sidebarTicketCategories')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ $item['link'] }}"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="{{ $item['link'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                                <div class="collapse " id="{{ $item['link'] }}">
                                                    <ul class="nav flex-column">
                                                        @if (isset($item['sub_menu']))
                                                            @foreach ($item['sub_menu'] as $sub_item)
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarEcommerce-->
                                            </li><!--end nav-item-->
                                        @endif

                                    @endforeach

                                </ul><!--end nav-->
                            </div><!--end sidebarHospital-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="MetricaWebsite" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="Website-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">

                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarHospital">
                                {{ __('general.products') }}
                            </a>
                            <div class="collapse " id="sidebarHospital">
                                <ul class="nav flex-column">
                                    @foreach ($filteredSideNav as $item)
                                    @if ($item['link'] == 'sidebarProducts' ||
                                            $item['link'] == 'sidebarCategory'||$item['link'] =='sidebarCharacteristics')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ $item['link'] }}"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="{{ $item['link'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                                <div class="collapse " id="{{ $item['link'] }}">
                                                    <ul class="nav flex-column">
                                                        @if (isset($item['sub_menu']))
                                                            @foreach ($item['sub_menu'] as $sub_item)
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarEcommerce-->
                                            </li><!--end nav-item-->
                                        @endif

                                    @endforeach

                                </ul><!--end nav-->
                            </div><!--end sidebarHospital-->
                        </li><!--end nav-item--> <li class="nav-item">
                            <a class="nav-link" href="#sidebarHospitalOne" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarHospitalOne">
                                {{ __('general.blog') }}
                            </a>
                            <div class="collapse " id="sidebarHospitalOne">
                                <ul class="nav flex-column">
                                    @foreach ($filteredSideNav as $item)
                                    @if (
                                        $item['link'] == 'sidebarBlog' ||
                                            $item['link'] == 'sidebarTags')
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ $item['link'] }}"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="{{ $item['link'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                                <div class="collapse " id="{{ $item['link'] }}">
                                                    <ul class="nav flex-column">
                                                        @if (isset($item['sub_menu']))
                                                            @foreach ($item['sub_menu'] as $sub_item)
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ $sub_item['route'] == 'chat.index' ? route($sub_item['route'], Auth()->user()) : route($sub_item['route']) }}">{{ $sub_item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarEcommerce-->
                                            </li><!--end nav-item-->
                                        @endif

                                    @endforeach

                                </ul><!--end nav-->
                            </div><!--end sidebarHospital-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="MetricaSystem" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="System-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                        @if (
                            $item['link'] == 'sidebarEmailConfiguration' ||
                                $item['link'] == 'sidebarAPI' ||
                                $item['link'] == 'sidebarWhatsAppSettings' ||
                                $item['link'] == 'sidebarAuthKeySettings')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($item['route']) }}">
                                    {{ $item['title'] }}
                                </a>
                            </li><!--end nav-item-->
                        @endif
                    @endforeach
                </ul><!--end navbar-nav--->
            </div><!-- end Dashboards -->

            <div id="MetricaProfile" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="Profile-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                        @if ($item['link'] == 'sidebarProfile' || $item['link'] == 'sidebarChangePassword')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($item['route']) }}">
                                    {{ $item['title'] }}
                                </a>
                            </li><!--end nav-item-->
                        @endif
                    @endforeach
                </ul><!--end navbar-nav--->
            </div><!-- end Dashboards -->


            {{-- <div id="MetricaChat" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="chat-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link'
                            href="{{ route('chat.index', Auth()->user()) }}">{{ __('general.chat') }}</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class='nav-link'
                            href="{{ route('whatsapp.chat') }}">whatsApp</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarEmailConfiguration' || $item['link'] == 'sidebarAPI' || $item['link'] == 'sidebarWhatsAppSettings' || $item['link'] == 'sidebarAuthKeySettings')
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
                </ul><!--end navbar-nav---> --}}

        </div><!-- end Dashboards -->

        {{--  <div id="MetricaProfile" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="profile-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>
                <ul class="navbar-nav">
                    @foreach ($filteredSideNav as $item)
                            @if ($item['link'] == 'sidebarMails' || $item['link'] == 'sidebarappointments')
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
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarHospital">
                        Hospital
                    </a>
                    <div class="collapse " id="sidebarHospital">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#sidebarAppointments " class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAppointments">
                                    Appointments
                                </a>
                                <div class="collapse " id="sidebarAppointments">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="hospital-doctor-shedule.html">Dr. Shedule</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="hospital-all-appointments.html">All Appointments</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAppointments-->sad
                            </li><!--end nav-item-->

                        </ul><!--end nav-->
                    </div><!--end sidebarHospital-->
                </li><!--end nav-item-->

            </div><!-- end Dashboards --> --}}
    </div>
    <!--end menu-body-->
</div><!-- end main-menu-inner-->
</div>



<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a class='logo logo-metrica d-block text-center' href='{{ route('home') }}'>
            <span>
                <img src="{{ asset('assets-admin/images/IMG_1465.png') }}" alt="logo-small" class="logo-sm">
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
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Apps"
                        data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
            <a href="#" class="profile">
                <img src="{{ asset('assets-admin/images/users/user-4.jpg ') }}" alt="profile-user"
                    class="rounded-circle thumb-sm">
            </a>
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a class='logo' href='{{ route('home') }}'>
                <span>
<<<<<<< HEAD
                    <img src="{{ asset('assets-admin/images/IMG_1468.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    <img src="{{ asset('assets-admin/images/logo-dark') }}" alt="logo-=large" class="logo-lg logo-light">
=======
                    <img src="{{ asset('assets-admin/images/logo-dark.png') }}" alt="logo-large"
                        class="logo-lg logo-dark">
                    <img src="{{ asset('assets-admin/images/logo-dark') }}" alt="logo-=large"
                        class="logo-lg logo-light">
>>>>>>> e225f28bbd88027a24aaae9146012773afb884e3
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
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                {{ __('general.attributes.product') }}
                            </a>
                            <div class="collapse " id="sidebarEcommerce">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('products.index') }}'>{{ __('general.side.products-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('products.create') }}'>{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarUsers" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarUsers">
                                {{ __('general.attributes.user') }}
                            </a>
                            <div class="collapse " id="sidebarUsers">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('users.index') }}">{{ __('general.side.users-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('users.create') }}">{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarUsers-->
                        </li><!--end nav-item-->

                         <li class="nav-item">
                            <a class="nav-link" href="#sidebarCategories" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarCategories">
                                {{ __('general.attributes.categories') }}
                            </a>
                            <div class="collapse " id="sidebarCategories">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('categories.index') }}">{{ __('general.side.categories-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('categories.create') }}">{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCategories-->
                        </li><!--end nav-item-->

                         <li class="nav-item">
                            <a class="nav-link" href="#sidebarContacts" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarCategories">
                                {{ __('general.attributes.contacts') }}
                            </a>
                            <div class="collapse " id="sidebarContacts">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('contacts.index') }}">{{ __('general.side.contacts-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('contacts.create') }}">{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCategories-->
                        </li><!--end nav-item-->

=======
                        @foreach ($filteredSideNav as $item)
                            <li class="nav-item">
                                <a class="nav-link" href="#{{ $item['link'] }}" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="{{ $item['link'] }}">
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
                        @endforeach
>>>>>>> e225f28bbd88027a24aaae9146012773afb884e3
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
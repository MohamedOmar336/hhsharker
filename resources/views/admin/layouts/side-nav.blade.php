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
                    @foreach ($filteredSideNav as $item)
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="{{ $item['title'] }}" data-bs-trigger="hover">
                            <a href="#{{ $item['link'] }}" id="{{ $item['link'] }}-tab" class="nav-link">
                                <i class="{{ $item['icon'] }} menu-icon"></i>
                            </a>
                        </li>
                    @endforeach
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
                    <img src="{{ asset('assets-admin/images/IMG_1468.png') }}" alt="logo-large"
                        class="logo-lg logo-dark">
                    <img src="{{ asset('assets-admin/images/logo-dark') }}" alt="logo-=large"
                        class="logo-lg logo-light">
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->

            <div class="menu-body navbar-vertical tab-content" data-simplebar>
                @foreach ($filteredSideNav as $item)

                    <div id="{{ $item['link'] }}" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="apps-tab">
                        <div class="title-box">
                            <h6 class="menu-title">{{ $item['title'] }}</h6>
                        </div>

                        <div class="collapse navbar-collapse" id="sidebarCollapse">
                            <!-- Navigation -->
                            @if (!empty($item['sub_menu']))
                                @foreach ($item['sub_menu'] as $sub_item)
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            @if (!empty($sub_item['sub_menu']))
                                                <a class="nav-link" href="#{{ Str::slug($sub_item['title']) }}" data-bs-toggle="collapse" aria-expanded="false">
                                                    {{ $sub_item['title'] }}
                                                </a>
                                                <div class="collapse" id="{{ Str::slug($sub_item['title']) }}">
                                                    <ul class="nav flex-column ms-3">
                                                        @foreach ($sub_item['sub_menu'] as $third_item)
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route($third_item['route'])}}">
                                                                    {{ $third_item['title'] }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @else
                                                <a class="nav-link" href="{{ route($sub_item['route'])}}">
                                                    {{ $sub_item['title'] }}
                                                </a>
                                            @endif
                                        </li>

                                    </ul><!--end navbar-nav--->
                                @endforeach
                                @endif
                        </div><!--end sidebarCollapse-->
                    </div><!-- end Crypto -->
                    @endforeach
            </div>
            <!--end menu-body-->
        </div><!-- end main-menu-inner-->
    </div>

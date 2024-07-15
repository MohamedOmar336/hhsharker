<div class="topbar">
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-plus"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('tickets.create') }}"><i
                            class="ti ti-ticket font-16 me-1 align-text-bottom"></i>
                        {{ __('general.attributes.add-ticket') }}</a>
                    <a class="dropdown-item" href="{{ route('appointments.create') }}"><i
                            class="ti ti-calendar font-16 me-1 align-text-bottom"></i>
                        {{ __('general.attributes.add-appointment') }}</a>
                    <a class="dropdown-item" href="{{ route('contacts.create') }}"><i
                            class="ti ti-user font-16 me-1 align-text-bottom"></i>
                        {{ __('general.attributes.add-contact') }}</a>

                </div>

            </li><!--end topbar-profile-->

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    @if (app()->isLocale('ar'))
                        AR
                    @endif
                    @if (app()->isLocale('en'))
                        EN
                    @endif
                </a>
                <div class="dropdown-menu">
                    @if (app()->isLocale('ar'))
                        <a class="dropdown-item" href="{{ route('change.lang', 'en') }}">English</a>
                    @endif
                    @if (app()->isLocale('en'))
                        <a class="dropdown-item" href="{{ route('change.lang', 'ar') }}">العربيه</a>
                    @endif
                </div>
            </li><!--end topbar-language-->
            <!-- Dark Mode Toggle Button -->
            <li>
                <button id="darkModeToggle" class="nav-link button-menu-mobile nav-icon">
                    <i class="ti ti-moon" id="darkModeIcon"></i> <!-- Icon for dark mode -->
                    <i class="ti ti-sun d-none" id="lightModeIcon"></i> <!-- Icon for light mode -->
                </button>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <span class="alert-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                    <h6
                        class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span
                            class="badge bg-soft-primary badge-pill">{{ auth()->user()->unreadNotifications->count() }}</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        @forelse(auth()->user()->unreadNotifications as $notification)
                            <!-- item-->
                            <a href="{{ $notification->data['link'] }}" class="dropdown-item py-3">
                                <small
                                    class="float-end text-muted ps-2">{{ $notification->created_at->diffForHumans() }}</small>
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
                        @empty
                            <p class="dropdown-item py-3">No new notifications</p>
                        @endforelse
                    </div>
                    <!-- All-->
                    {{-- <a href="{{ route('notifications.index') }}" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a> --}}
                </div>

            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{ Auth::user()->image ? asset('images/' . Auth::user()->image) : asset('assets-admin/images/user.png') }}"
                            alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                        <div>
                            {{-- <small class="d-none d-md-block font-11">Admin</small> --}}
                            <span class="d-none d-md-block fw-semibold font-12">{{ Auth()->user()->user_name }} <i
                                    class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <a class="dropdown-item" href="{{ route('profile.show') }}">
                        <i class="ti ti-user font-16 me-1 align-text-bottom"></i>
                        {{ __('general.actions.profile') }}
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="ti ti-settings font-16 me-1 align-text-bottom"></i>
                        {{ __('general.actions.settings') }}
                    </a> --}}
                    {{-- <div class="dropdown-divider mb-0"></div> --}}
                    <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <i class="fas fa-sign-out-alt m-2"></i>{{ __('general.actions.logout') }}
                    </a>
                </div>

            </li><!--end topbar-profile-->

        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            {{-- <li class="hide-phone app-search">
                <form role="search" action="#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0"
                        placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li> --}}
        </ul>
    </nav>
</div>

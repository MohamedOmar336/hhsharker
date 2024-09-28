
<style>
    .viewport {
        overflow: hidden;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    
    .scroll-container {
        position: absolute;
        overflow: hidden;
        z-index: 10;
        display: flex;
        justify-content: center;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        width: 100%;
    }
    
    .body-content {
        width: 100%;
    }
</style>


<div class="page-loader">
        <img src="{{ asset('assets-frontend/images/white-logo.png') }}" alt="Logo">
    </div>

    <header class="header">
        <div class="container header-container">
            <nav class="navbar navbar-expand-xl ">
                <a class="header-logo" href="{{ route('frontend.home',['locale' => app()->getLocale()]) }}">
                    <img src="{{ asset('assets-frontend/images/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-light fa-bars"></i>
                </button>
                <div class="header-overly collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                </div>
                <a class="close-i-header collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-regular fa-xmark"></i></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('frontend.home',['locale' => app()->getLocale()]) }}">{{ __('website.header_menu.home') }}</a>
                        </li>
                        <li class="nav-item dropdown dropdown-div">
                            <a class="nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('website.header_menu.company') }}
                            </a>
                           
                            <ul class="dropdown-menu">
                                <div class="drop-innter-div">                                   
                                    <li><a class="dropdown-item" href="{{ route('frontend.about',['locale' => app()->getLocale()]) }}"> {{ __('website.header_menu.about') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.value-and-vision',['locale' => app()->getLocale()]) }}"> {{ __('website.header_menu.value_vision') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.company-founder',['locale' => app()->getLocale()]) }}"> {{ __('website.header_menu.company_founder') }}</a></li>
                                </div>
                            </ul>
                            
                        </li>
                        {{-- <li class="nav-item dropdown dropdown-div">
                            <a class="nav-link dropdown-toggle" href="{{ route('frontend.air-conditioner',['locale' => app()->getLocale()]) }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('website.header_menu.air_conditioner') }}
                            </a>
                            @if($headerAirConditionerArr->count() > 0)
                            <ul class="dropdown-menu">
                                <div class="drop-innter-div">
                                    @foreach($headerAirConditionerArr as $cat)
                                    <li><a class="dropdown-item" href="{{ route('frontend.air-conditioner.parent',['locale' => app()->getLocale(),'parent'=>$cat->slug]) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </div>
                            </ul>
                            @endif
                        </li> --}}
                        <li class="nav-item megamenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('frontend.air-conditioner',['locale' => app()->getLocale()]) }}">
                                {{ __('website.header_menu.air_conditioner') }}
                            </a>
                            <div class="megamenu-main-div">
                                <div class="megamenu-body ">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <h5>Residentials AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">Window</a>
                                                        <a href="#">Inverter</a>
                                                        <a href="#">On/Off</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Commercial AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">VRF</a>
                                                        <a href="#">Indoor</a>
                                                        <a href="#">Outdoor</a>
                                                        <a href="#">Rooftop</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Light Commercial AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">Concealed</a>
                                                        <a href="#">Cassette</a>
                                                        <a href="#">Floor Standing</a>
                                                        <a href="#">Portable</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <h5>Case Studies</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Commercial Support</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Our Latest Projects</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <img src="{{ asset('assets-frontend/images/mega-menu-img.png') }}" width="100%" height="100%" alt="Mega Menu Banner">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <img src="{{ asset('assets-frontend/images/mega-menu-img-2.png') }}" width="100%" alt="Mega Menu Banner">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item megamenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('frontend.home-appliances',['locale' => app()->getLocale()]) }}">
                            {{ __('website.header_menu.home_appliances') }}
                            </a>
                            <div class="megamenu-main-div">
                                <div class="megamenu-body ">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <h5>Residentials AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">Window</a>
                                                        <a href="#">Inverter</a>
                                                        <a href="#">On/Off</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Commercial AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">VRF</a>
                                                        <a href="#">Indoor</a>
                                                        <a href="#">Outdoor</a>
                                                        <a href="#">Rooftop</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Light Commercial AC</h5>
                                                    <div class="mega-a-list">
                                                        <a href="#">Concealed</a>
                                                        <a href="#">Cassette</a>
                                                        <a href="#">Floor Standing</a>
                                                        <a href="#">Portable</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <h5>Case Studies</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Commercial Support</h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Our Latest Projects</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <img src="{{ asset('assets-frontend/images/mega-menu-img.png') }}" width="100%" height="100%" alt="Mega Menu Banner">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <img src="{{ asset('assets-frontend/images/mega-menu-img-2.png') }}" width="100%" alt="Mega Menu Banner">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-div">
                            <a class="nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('website.header_menu.media_center') }}
                            </a>
                           
                            <ul class="dropdown-menu">
                                <div class="drop-innter-div">                                   
                                    <li><a class="dropdown-item" href="{{ route('frontend.news',['locale' => app()->getLocale()]) }}"> {{ __('website.header_menu.news') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.industry-insights',['locale' => app()->getLocale()]) }}"> {{ __('website.header_menu.industry_insight') }}</a></li>
                                </div>
                            </ul>
                            
                        </li>
                    </ul>
                    <div class="h-button-list">
                        <div class="dropdown flag-dropdown me-2">
                            <a href="{{ changeLanguage() }}" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <img src=" {{ app()->getLocale() == 'en' ? asset('assets-frontend/images/en-flag.svg') : asset('assets-frontend/images/ar-flag.svg') }}" alt="{{ strtoupper(app()->getLocale()) }} Flag"> {{ strtoupper(app()->getLocale()) }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ changeLanguage() }}"> <img src=" {{ app()->getLocale() == 'en' ? asset('assets-frontend/images/ar-flag.svg') : asset('assets-frontend/images/en-flag.svg') }}" alt="{{ strtoupper(app()->getLocale()) }} Flag"> {{ app()->getLocale() == 'en' ? strtoupper('ar') : strtoupper('en') }}</a> 
                                </li>
                            </ul>
                        </div>
                        @if(request()->routeIs('frontend.home'))
                        <button class="dark-ligh-btn">
                            <span class="sun-icon" onclick="setDarkMode(0)" >
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9.5C7.933 9.5 9.5 7.933 9.5 6C9.5 4.067 7.933 2.5 6 2.5C4.067 2.5 2.5 4.067 2.5 6C2.5 7.933 4.067 9.5 6 9.5Z" fill=""/>
                                    <path d="M6 11.48C5.725 11.48 5.5 11.275 5.5 11V10.96C5.5 10.685 5.725 10.46 6 10.46C6.275 10.46 6.5 10.685 6.5 10.96C6.5 11.235 6.275 11.48 6 11.48ZM9.57 10.07C9.44 10.07 9.315 10.02 9.215 9.925L9.15 9.86C8.955 9.665 8.955 9.35 9.15 9.155C9.345 8.96 9.66 8.96 9.855 9.155L9.92 9.22C10.115 9.415 10.115 9.73 9.92 9.925C9.825 10.02 9.7 10.07 9.57 10.07ZM2.43 10.07C2.3 10.07 2.175 10.02 2.075 9.925C1.88 9.73 1.88 9.415 2.075 9.22L2.14 9.155C2.335 8.96 2.65 8.96 2.845 9.155C3.04 9.35 3.04 9.665 2.845 9.86L2.78 9.925C2.685 10.02 2.555 10.07 2.43 10.07ZM11 6.5H10.96C10.685 6.5 10.46 6.275 10.46 6C10.46 5.725 10.685 5.5 10.96 5.5C11.235 5.5 11.48 5.725 11.48 6C11.48 6.275 11.275 6.5 11 6.5ZM1.04 6.5H1C0.725 6.5 0.5 6.275 0.5 6C0.5 5.725 0.725 5.5 1 5.5C1.275 5.5 1.52 5.725 1.52 6C1.52 6.275 1.315 6.5 1.04 6.5ZM9.505 2.995C9.375 2.995 9.25 2.945 9.15 2.85C8.955 2.655 8.955 2.34 9.15 2.145L9.215 2.08C9.41 1.885 9.725 1.885 9.92 2.08C10.115 2.275 10.115 2.59 9.92 2.785L9.855 2.85C9.76 2.945 9.635 2.995 9.505 2.995ZM2.495 2.995C2.365 2.995 2.24 2.945 2.14 2.85L2.075 2.78C1.88 2.585 1.88 2.27 2.075 2.075C2.27 1.88 2.585 1.88 2.78 2.075L2.845 2.14C3.04 2.335 3.04 2.65 2.845 2.845C2.75 2.945 2.62 2.995 2.495 2.995ZM6 1.52C5.725 1.52 5.5 1.315 5.5 1.04V1C5.5 0.725 5.725 0.5 6 0.5C6.275 0.5 6.5 0.725 6.5 1C6.5 1.275 6.275 1.52 6 1.52Z" fill="#D4DBEA"/>
                                </svg> 
                            </span>
                            <span class="moon-icon" onclick="setDarkMode(1)">
                                <svg  width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.765 7.96469C10.685 7.82969 10.46 7.61969 9.89998 7.71969C9.58998 7.77469 9.27498 7.79969 8.95998 7.78469C7.79498 7.73469 6.73998 7.19969 6.00498 6.37469C5.35498 5.64969 4.95498 4.70469 4.94998 3.68469C4.94998 3.11469 5.05998 2.56469 5.28498 2.04469C5.50498 1.53969 5.34998 1.27469 5.23998 1.16469C5.12498 1.04969 4.85498 0.889692 4.32498 1.10969C2.27998 1.96969 1.01498 4.01969 1.16498 6.21469C1.31498 8.27969 2.76498 10.0447 4.68498 10.7097C5.14498 10.8697 5.62998 10.9647 6.12998 10.9847C6.20998 10.9897 6.28998 10.9947 6.36998 10.9947C8.04498 10.9947 9.61498 10.2047 10.605 8.85969C10.94 8.39469 10.85 8.09969 10.765 7.96469Z" fill=""/>
                                </svg>
                            </span>
                        </button>
                        @endif
                        <a href="{{ route('frontend.contact-us',['locale' => app()->getLocale()]) }}" type="button" class="btn header-btn"> {{ __('website.header_menu.contact_us') }}</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div class="viewport">
        <div id="scroll-container" class="scroll-container">
            <div class="body-content">

<!-- Offcanvas Menu Wrapper Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <span class="icon_close"></span>
    </div>
    <div class="logo">
        <a href="{{ route('home_page') }}">
            <img src="/img/logo.png" alt="">
        </a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="om-widget">
        <ul>
            <li><i class="icon_mail_alt"></i> info@euro-aknad.ee</li>
            <li><i class="fa fa-mobile-phone"></i> +372 56 875 401</li>
        </ul>
        <a href="https://euroikkunat.shop/" target="_blank" class="hw-btn">{{ __('header.calculator_button_text') }}</a>
    </div>
    <div class="om-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        @if (App::getLocale() == 'et')
          <a href="{{ route('changeLang', 'ru') }}"><img src="/img/rus.png" alt="На русском" class="mr-1">{{ __('header.rus_lang_button_text') }}</a>
        @else
          <a href="{{ route('changeLang', 'et') }}"><img src="/img/et.png" alt="Eesti keeles" class="mr-1">{{ __('header.est_lang_button_text') }}</a>
        @endif
    </div>
</div>
<!-- Offcanvas Menu Wrapper End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="hs-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="{{ route('home_page') }}"><img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ht-widget">
                        <ul>
                            <li><i class="icon_mail_alt"></i> info@euro-aknad.ee</li>
                            <li><i class="fa fa-mobile-phone"></i>+372 56 875 401</li>
                        </ul>
                        <a href="https://euroikkunat.shop/" target="_blank" class="hw-btn">{{ __('header.calculator_button_text') }}</a>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <span class="icon_menu"></span>
            </div>
        </div>
    </div>
    <div class="hs-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <nav class="nav-menu">
                        <ul>
                            <li class="{{ Request::routeIs('home_page') ? 'active' : '' }}"><a href="{{ route('home_page') }}">{{ __('header.nav_home_page') }}</a></li>
                            <li class="{{ (request()->segment(1) == 'windows') ? 'active' : '' }}"><a href="{{ route('windows_page') }}">{{ __('header.nav_window_page') }}</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('windows_alumiinium_page') }}">{{ __('header.nav_window_page_aluminium') }}</a></li>
                                    <li><a href="{{ route('windows_puit_alumiinium_page') }}">{{ __('header.nav_window_page_wood_aluminium') }}</a></li>
                                    <li><a href="{{ route('windows_puit_aknad_page') }}">{{ __('header.nav_window_page_wood') }}</a></li>
                                    <li><a href="{{ route('windows_pvc_aknad_page') }}">{{ __('header.nav_window_page_pvc') }}</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::routeIs('gallery_page') ? 'active' : '' }}"><a href="{{ route('gallery_page') }}">{{ __('header.nav_gallery_page') }}</a></li>
                            <li class="{{ Request::routeIs('contact_page') ? 'active' : '' }}"><a href="{{ route('contact_page') }}">{{ __('header.nav_contact_page') }}</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="hn-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        @if (App::getLocale() == 'et')
                          <a href="{{ route('changeLang', 'ru') }}"><img src="/img/rus.png" alt="На русском" class="mr-1">{{ __('header.rus_lang_button_text') }}</a>
                        @else
                          <a href="{{ route('changeLang', 'et') }}"><img src="/img/et.png" alt="Eesti keeles" class="mr-1">{{ __('header.est_lang_button_text') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

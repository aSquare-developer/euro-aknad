<!-- Page Preloder -->
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->

<!-- Offcanvas Menu Wrapper Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <span class="icon_close"></span>
    </div>
    <div class="logo">
        <a href="{{ route('home_page') }}">
            <img src="img/logo.png" alt="">
        </a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="om-widget">
        <ul>
            <li><i class="icon_mail_alt"></i> info@euro-aknad.ee</li>
            <li><i class="fa fa-mobile-phone"></i> +372 56 875 401</li>
        </ul>
        <a href="https://euroikkunat.shop/" target="_blank" class="hw-btn">Kalkulaator</a>
    </div>
    <div class="om-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><img src="img/et.png" alt=""></a>
        <a href="#"><img src="img/rus.png" alt=""></a>
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
                        <a href="{{ route('home_page') }}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ht-widget">
                        <ul>
                            <li><i class="icon_mail_alt"></i> info@euro-aknad.ee</li>
                            <li><i class="fa fa-mobile-phone"></i>+372 56 875 401</li>
                        </ul>
                        <a href="https://euroikkunat.shop/" target="_blank" class="hw-btn">Kalkulaator</a>
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
                            <li class="{{ Request::routeIs('home_page') ? 'active' : '' }}"><a href="{{ route('home_page') }}">Koduleht</a></li>
                            <li><a href="#">Aknad</a>
                                <ul class="dropdown">
                                    <li><a href="#">Alumiinium</a></li>
                                    <li><a href="#">Puit-alumiinium aknad</a></li>
                                    <li><a href="#">Puitaknad</a></li>
                                    <li><a href="#">PVC Aknad</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::routeIs('gallery_page') ? 'active' : '' }}"><a href="{{ route('gallery_page') }}">Gallerii</a></li>
                            <li class="{{ Request::routeIs('contact_page') ? 'active' : '' }}"><a href="{{ route('contact_page') }}">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="hn-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><img src="img/et.png" alt=""></a>
                        <a href="#"><img src="img/rus.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

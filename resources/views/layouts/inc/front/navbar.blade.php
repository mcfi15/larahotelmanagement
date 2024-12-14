<header class="fixed_header menu_v4 submenu_version">
    <div class="layer"></div><!-- Opacity Mask -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <a href="{{ url('/') }}" class="logo_normal"><img src="{{ asset($appSetting->footerlogo) }}" width="135" height="45" alt=""></a>
                <a href="{{ url('/') }}" class="logo_sticky"><img src="{{ asset($appSetting->logo) }}" width="135" height="45" alt=""></a>
            </div>
            <div class="col-9">
                <div class="main-menu">
                    <a href="#" class="closebt open_close_menu"><i class="bi bi-x"></i></a>
                    <div class="logo_panel"><img src="{{ asset($appSetting->logo) }}" width="135" height="45" alt=""></div>
                    <nav id="mainNav">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/rooms-and-suites') }}">Rooms & Suites</a></li>
                            <li class="submenu">
                                <a href="#0" class="show-submenu">Facilities</a>
                                <ul>
                                    <li><a href="gallery.html">Masonry Gallery</a></li>
                                    <li><a href="restaurant.html">Restaurant</a></li>
                                    <li><a href="menu-of-the-day.html">Menu of the day</a></li>
                                    <li><a href="news-1.html">Blog</a></li>
                                    <li><a href="404.html">Error Page</a></li>
                                    <li><a href="modal-advertise-1.html">Modal Advertise</a></li>
                                    <li><a href="cookie-bar.html">GDPR Cookie Bar</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="menu-2.html">Menu Version 2 <span class="custom_badge">Hot</span></a></li>
                                    <li><a href="menu-3.html">Menu Version 3</a></li>
                                    <li><a href="menu-4.html">Menu Version 4</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/contact') }}">Contacts</a></li>
                            <li><a href="#booking_section" class="btn_1">Book Now</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="hamburger_2 open_close_menu float-end">
                    <div class="hamburger__box">
                        <div class="hamburger__inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</header><!-- End Header -->
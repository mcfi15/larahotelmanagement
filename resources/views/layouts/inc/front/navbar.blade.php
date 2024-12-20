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
                                    @forelse($facilities as $facility)
                                    <li><a href="{{ url('facility/'.$facility->slug) }}">{{ $facility->name }}</a></li>
                                    @empty
                                    <li><a>No Facility Found</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/contact') }}">Contacts</a></li>
                            @guest
                                @if (Route::has('login'))
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                @endif
                                @if (Route::has('register'))
                                <li><a href="{{ url('/register') }}">Register</a></li>
                                @endif
                            @else

                            @if(Auth::user()->role_as == '1')
                            <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                            @elseif(Auth::user()->role_as == '2')
                            <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                            @else
                            <li><a href="{{ url('/home') }}">Account</a></li>
                            @endif
                            
                            <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endguest
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ $appSetting->website_name }} </title>

    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset($appSetting->favicon) }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset($appSetting->favicon) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset($appSetting->favicon) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset($appSetting->favicon) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset($appSetting->favicon) }}">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- BASE CSS -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/front/css/vendors.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets/front/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body> 

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

        @include('layouts.inc.front.navbar')
 
    <main>

        @yield('content')

    </main>

    <footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url({{ asset('assets/front/img/rooms/3.jpg') }})"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-4 col-md-12">
                    <h5>Contacts</h5>
                    <ul>
                        <li>{{ $appSetting->address }} | {{ $appSetting->zipcode }}<br> - {{ $appSetting->country }}<br><br></li>
                        <li><strong><a href="mailto:{{ $appSetting->emai }}">{{ $appSetting->email }}</a></strong></li>
                        <li><strong><a href="mailto:{{ $appSetting->email2 }}">{{ $appSetting->email2 }}</a></strong></li>
                        <li><strong><a href="tel:{{ $appSetting->phone }}">{{ $appSetting->phone }}</a></strong></li>
                        <li><strong><a href="tel:{{ $appSetting->phone2 }}">{{ $appSetting->phone2 }}</a></strong></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="{{ $appSetting->instagram }}"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="{{ $appSetting->linkedin }}"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="{{ $appSetting->facebook }}"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="{{ $appSetting->twitter }}"><i class="bi bi-twitter-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Explore</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="room-list-1.html">Rooms &amp; Suites</a></li>
                            <li><a href="news-1.html">News &amp; Events</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="about.html">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="newsletter">
                        <h5>Newsletter</h5>
                        <div id="message-newsletter"></div>
                        <form method="post" action="https://www.ansonika.com/paradise/phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                        <p>Receive latest offers and promos without spam. You can cancel anytime.</p>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                © 2024 {{ $appSetting->website_name }}, All rights reserved.
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- /back to top -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('assets/front/js/common_scripts.js') }}"></script>
    <script src="{{ asset('assets/front/js/common_functions.js') }}"></script>
    <script src="{{ asset('assets/front/js/datepicker_search.js') }}"></script>
    <script src="{{ asset('assets/front/js/datepicker_inline.js') }}"></script>
    <script src="{{ asset('assets/front/js/validate.js') }}"></script>

    @livewireScripts
</body>


</html>
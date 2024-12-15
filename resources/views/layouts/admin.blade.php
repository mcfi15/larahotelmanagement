<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ $appSetting->website_name }} </title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($appSetting->favicon) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($appSetting->favicon) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($appSetting->favicon) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($appSetting->favicon) }}">
    <link rel="manifest" href="{{ asset('assets/back/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset($appSetting->favicon) }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/config.js') }}"></script>

    <link href=".{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href=".{{ asset('assets/vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('assets/back/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/back/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('assets/colored-toast.css') }}" rel="stylesheet" />

    <style>
      .colored-toast.swal2-icon-success {
    background-color: #a5dc86 !important;
  }
  
  .colored-toast.swal2-icon-error {
    background-color: #f27474 !important;
  }
  
  .colored-toast.swal2-icon-warning {
    background-color: #f8bb86 !important;
  }
  
  .colored-toast.swal2-icon-info {
    background-color: #3fc3ee !important;
  }
  
  .colored-toast.swal2-icon-question {
    background-color: #87adbd !important;
  }
  
  .colored-toast .swal2-title {
    color: white;
  }
  
  .colored-toast .swal2-close {
    color: white;
  }
  
  .colored-toast .swal2-html-container {
    color: white;
  }
  
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
  </head>
  

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">

        @include('layouts.inc.admin.sidebar')
        @include('layouts.inc.admin.navbar')
        
        <div class="content">
              @yield('content')

          <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
              <div class="col-12 col-sm-auto text-center">
                © 2024 {{ $appSetting->website_name }}, All rights reserved.
              </div>
              
            </div>
          </footer>
        </div>
      </div>
    <script>
      var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
      var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
      var body = document.querySelector('body');
      var navbarDefault = document.querySelector('#navbarDefault');
      var navbarTopNew = document.querySelector('#navbarTopNew');
      var navbarSlim = document.querySelector('#navbarSlim');
      var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

      var documentElement = document.documentElement;
      var navbarVertical = document.querySelector('.navbar-vertical');

      if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        body.classList.add('nav-slim');
      } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarVertical.remove();
        navbarTopNew.remove();
        navbarSlim.remove();
        navbarTopSlimNew.removeAttribute('style');
        body.classList.add('nav-slim');
      } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarSlim.remove();
        navbarVertical.remove();
        navbarTopSlimNew.remove();
        navbarTopNew.removeAttribute('style');
        documentElement.classList.add('navbar-horizontal')

      } else {
        body.classList.remove('nav-slim');
        navbarSlim.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
      }

      var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
      var navbarTop = document.querySelector('.navbar-top');
      if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
      }

      var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
      var navbarVertical = document.querySelector('.navbar-vertical');
      if (navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
      }
    </script>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/anchorjs/anchor.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/lodash/lodash.min.js') }}"></script>
  <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="{{ asset('assets/vendors/list.js/list.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/dayjs/dayjs.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/choices/choices.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/back/js/phoenix.js') }}"></script>

  <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/chart/chart.min.js') }}"></script>
  <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.14/dist/index.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=revenueMapInit" async></script>
  <script src="{{ asset('assets/back/js/ecommerce-dashboard.js') }}"></script>

  @livewireScripts
</body>

</html>
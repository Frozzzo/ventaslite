<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Ventas</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme\assets\img\favicon\favicon-Logo.png') }}">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ff0000">
<meta name="theme-color" content="#ff0000">


<!-- Volt CSS -->
<link type="text/css" href="../css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/scripts.js'])

</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../index.html">
        <img class="navbar-brand-dark" src="{{ asset('theme\assets\img\favicon\favicon-Logo.png') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/favicon/favicon-Logo.png" alt="Leo logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
        
@include('layouts.theme.sidebar')
    
<main class="content">
  @include('layouts.theme.navbar')
  
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                @yield('content')
            </div>
           

@include('layouts.theme.footer')
</main>

    <!-- Core -->
<!-- <script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script> -->
{{-- <script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script> --}}

<!-- Vendor JS -->
{{-- <script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script> --}}

<!-- Slider -->
{{-- <script src="../vendor/nouislider/distribute/nouislider.min.js"></script> --}}

<!-- Smooth scroll -->
{{-- <script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script> --}}

<!-- Charts -->
<!-- <script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->

<!-- Datepicker -->
<!-- <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> -->

<!-- Sweet Alerts 2 -->
<!-- <script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script> -->

<!-- Moment JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script> -->

<!-- Vanilla JS Datepicker -->
<!-- <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> -->

<!-- Notyf -->
<!-- <script src="../vendor/notyf/notyf.min.js"></script> -->

<!-- Simplebar -->
<!-- <script src="../vendor/simplebar/dist/simplebar.min.js"></script> -->

<!-- Github buttons -->
<!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

<!-- Volt JS -->
<!-- <script src="../assets/js/volt.js"></script> -->

    
</body>

</html>

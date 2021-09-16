<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stack('custom-style')
  <!-- Favicons -->
  <link href="{{asset('assets/guest/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/guest/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/guest/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/guest/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  {{-- sweetalert --}}

   
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/guest/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyBiz - v4.3.0
  * Template URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 @include('guest.topbar')

  <!-- ======= Header ======= -->
  @include('guest.header')
  <!-- End Header -->


  <main id="main">
@yield('content')

</main><!-- End #main -->
@include('guest.footer')
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/guest/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/guest/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/guest/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/guest/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/guest/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/guest/vendor/swiper/swiper-bundle.min.js')}}"></script>
  
  
  <!-- Template Main JS File -->
  <script src="{{asset('assets/guest/js/main.js')}}"></script>
  @stack('custom-script')

</body>

</html>
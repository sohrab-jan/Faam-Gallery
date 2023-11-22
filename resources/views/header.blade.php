<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Faam Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png" rel="icon')}}">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon/style.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/activities.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/slider/nouislider.min.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Faamgallery - v1.3.1
    * Template URL: https://faamgallery.com
    * Author: zahrapanahi.art
    * License: https://faamgallery.com
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!--      <h1 class="logo me-auto"><a href="index.html">Faam Gallery<span>since 1996</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ url('/') }}" class="logo me-auto"><img src="{{asset('assets/img/FaamLogo.png')}}" alt="Faamgallery"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">GALLERY</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/activities') }}">ACTIVITIES</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('framing') }}">FRAMING</a></li>
                    <li><a class="nav-link scrollto " href="{{route('printing')}}">PRINTING</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('artworks') }}">SHOP</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('blogs') }}">BLOG</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact') }}">CONTACT</a></li>

                    <a href="#"><i class="fa fa-fw fa-search"></i></a>

                    <a href="{{ route('register') }}"><i class="fa fa-fw fa-user"></i></a>
                    @auth
                    <a href="{{ route('userprofile') }}" class="text-bold">
                        Welcome Dear {{auth()->user()->name}}</a>

                    @endauth

                    <a href="#"><i class="bi bi-bag"></i></a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

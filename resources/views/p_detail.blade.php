<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Erqma\'ed') }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/img/logo') }}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/img/logo') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/img/logo') }}/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/venobox/venobox.css" rel="stylesheet">
    <link href="{{ url('/vendor') }}/aos/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script defer src="{{ asset('js/fontawesome/all.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="antialiased">
    <!-- ========================= Site Header ========================= -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="{{ url('/img/logo') }}/logo.png" alt="Homepage">
            </a>
        </div>

        <div class="header-email">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z" />
            </svg>
            <a href="mailto:info@erqmaed.com">info@erqmaed.com</a> / <a
                href="mailto:erqmaed@gmail.com">erqmaed@gmail.com</a>
        </div>

    </header>
    <!-- end s-header -->

    <!-- ========================= Intro / Hero Section ========================= -->
    <section id="intro" class="s-intro s-intro--slides">
        <div class="intro-slider">
            <div class="intro-slider-img bg-opacity-40"
                style="background-image: url({{ url('/img') }}/project/art/slides/slide-01.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/project/art/slides/slide-02.jpg);">
            </div>
            {{-- <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/project/art/slides/slide-03.jpg);">
            </div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/project/art/slides/slide-04.jpg);"> --}}
            </div>
        </div>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row intro-content">

            <div class="column">

                <div class="intro-content__text" style="width: 80% !important;">

                    <h3>
                        Project
                    </h3>

                    <h1 style="font-size: 38px !important;">
                        <span
                            style="color: #75AEC7 !important; font-weight: bolder !important; font-size: 32px !important;">ART
                            (A<span
                            style="color: #fff !important; font-weight: medium !important;">wareness</span> R<span
                            style="color: #fff !important; font-weight: medium !important;">esillience</span> <span
                            style="color: #fff !important; font-weight: medium !important;">for</span> T<span
                            style="color: #fff !important; font-weight: medium !important;">rauma</span>)</span>
                    </h1>

                </div> <!-- end intro-content__text -->
            </div>
        </div>

        <ul class="intro-social">
            <li><a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            {{-- <li><a href="#0"><i class="fab fa-behance" aria-hidden="true"></i></a></li> --}}
        </ul> <!-- end intro social -->

        <div class="intro-scroll">
            <a href="#info" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end intro scroll -->

    </section>
    <!-- end s-intro -->

    <main id="main">
        <div class="container my-5">
            <small>Initial Date:<span class="mx-3"></span><time datetime="2020-05-25 12:00:00"><i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020</time></small>
        </div>
        <div class="container my-5 py-3">
            <p class="py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

            <p class="py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
    </main>

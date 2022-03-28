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
                style="background-image: url({{ url('/img') }}/project/slides/slide-01.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/project/slides/slide-02.jpg);">
            </div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/project/slides/slide-03.jpg);">
            </div>
        </div>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row intro-content">

            <div class="column">

                <div class="intro-content__text" style="width: 80% !important;">

                    <h3>
                        Our Projects
                    </h3>

                    <h1 style="font-size: 38px !important;">
                        <span
                            style="color: #75AEC7 !important; font-weight: bolder !important; font-size: 32px !important;">ART
                            (Awareness Resillience for Trauma)</span><br><br>
                        In a trauma-incidental country we are working hard to create a smooth environment to transition
                        our people from their renching trauma.
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
        <section id="nav" class="s-info nav-bar"
            style="background: #ffffff !important; background-color: white !important; padding-top: 2rem !important; padding-bottom: 2rem !important; font-weight: 500 !important;">
            <div class="container d-flex align-items-center">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('project') }}">Projects</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- ======= Unique Features Section ======= -->
        <section class="" style="background-color: #ffffff !important;">
            <div class="section-title">
                <h1 class="text-center font-weight-bolder text-uppercase mt-5" style="color: #191A2E !important;">Projects</h1>
                <p class="text-center text-lowercase mt-2"
                    style="color: #191A2E !important; font-weight: 500 !important;">erqma'ed gets involved in projects
                    solving the social and psychological problems of the community regardless of age, sex, religion,
                    race, and political outlook</p>
            </div>
            <div class="container w-75 ml-auto mr-auto my-5">
                <article class="postcard dark blue">
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="{{route('p_detail')}}">ART - Awareness Resillience for Trauma</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Living under the daily tremour of stagnant conditions in Africa, there is no doubt of the many traums carving their place in peopls minds everywhere. ... When we created ART we are aiming to create a habitual and cocooned environment for people to have a quick and bright recovery into a stable psychological makeup and livelihood.</div>
                        <ul class="postcard__tagbox">
                            {{-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li> --}}
                            <li class="tag__item play blue">
                                <a href="{{route('p_detail')}}">Discover</a>
                            </li>
                        </ul>
                    </div>
                    <a class="postcard__img_link" href="{{route('p_detail')}}">
                        <img class="postcard__img" src="{{url('/img')}}/project/art.jpg" alt="Image Title" />
                    </a>
                </article>
            </div>
            <div class="container w-75 ml-auto mr-auto my-5">
                <article class="postcard dark blue">
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="{{route('p_detail')}}">ART - Awareness Resillence for Trauma</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Living under the daily tremour of stagnant conditions in Africa, there is no doubt of the many traums carving their place in peopls minds everywhere. ... When we created ART we are aiming to create a habitual and cocooned environment for people to have a quick and bright recovery into a stable psychological makeup and livelihood.</div>
                        <ul class="postcard__tagbox">
                            {{-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li> --}}
                            <li class="tag__item play blue">
                                <a href="{{route('p_detail')}}">Discover</a>
                            </li>
                        </ul>
                    </div>
                    <a class="postcard__img_link" href="{{route('p_detail')}}">
                        <img class="postcard__img" src="{{url('/img')}}/project/art.jpg" alt="Image Title" />
                    </a>
                </article>
            </div>
            <div class="container w-75 ml-auto mr-auto my-5">
                <article class="postcard dark blue">
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="{{route('p_detail')}}">Kleft Awareness</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Tue, Feb 05th 2022
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            {{-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li> --}}
                            <li class="tag__item play blue">
                                <a href="{{route('p_detail')}}">Discover</a>
                            </li>
                        </ul>
                    </div>
                    <a class="postcard__img_link" href="{{route('p_detail')}}">
                        <img class="postcard__img" src="{{url('/img')}}/project/art.jpg" alt="Image Title" />
                    </a>
                </article>
            </div>
        </section>
        <!-- End Unique Features Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row text-left">
                <div class="col">
                    <img src="{{ url('/img/logo') }}/logo-white.png" alt="logo" style="width: 220px !important;"
                        class="mb-5">
                    <div class="row mt-4">
                        <div class="col-1" style="padding-right: 0 !important; margin-right: 0 !important;">
                            <i class='bx bx-map'
                                style="font-size: 28px !important; font-weight: lighter !important;"></i>
                        </div>
                        <div class="col-11" style="padding-left: 0 !important; margin-left: 0 !important;">
                            <a href="https://goo.gl/maps/iZAttE4M5uyVmx1o8">Mickey Leland St, Addis Ababa, NB Business
                                Center, 8F/804</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1" style="padding-right: 0 !important; margin-right: 0 !important;">
                            <i class='bx bx-phone-call'
                                style="font-size: 28px !important; font-weight: lighter !important;"></i>
                        </div>
                        <div class="col-11" style="padding-left: 0 !important; margin-left: 0 !important;">
                            <a href="tel:+251911121314">+251911121314</a> / <a
                                href="tel:+251910304050">+251910304050</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1" style="padding-right: 0 !important; margin-right: 0 !important;">
                            <i class='bx bx-mail-send'
                                style="font-size: 28px !important; font-weight: lighter !important;"></i>
                        </div>
                        <div class="col-11" style="padding-left: 0 !important; margin-left: 0 !important;">
                            <a href="mailto:info@erqmaed.org" target="_blank">info@erqmaed.org</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="text-center mt-5 mx-auto" style="border-color: #75AEC7; width: 40%" />
            <div class="copyright">
                &copy; Copyright <strong><span>Erqma'ed Media and Communication</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed and Developed by <a href="https://www.earaldtradinget.com/">Earald Trading and ICT
                    Technologies</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/vendor') }}/jquery/jquery.min.js"></script>
    <script src="{{ url('/vendor') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/vendor') }}/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ url('/vendor') }}/php-email-form/validate.js"></script>
    <script src="{{ url('/vendor') }}/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ url('/vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/vendor') }}/venobox/venobox.min.js"></script>
    <script src="{{ url('/vendor') }}/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

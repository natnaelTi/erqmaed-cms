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
    <!-- ======================== Preloader ========================== -->
    {{-- <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> --}}

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
            <div class="intro-slider-img bg-opacity-40" style="background-image: url({{ url('/img') }}/hero/slides/slide-01.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/hero/slides/slide-02.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/hero/slides/slide-03.jpg);"></div>
        </div>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row intro-content">

            <div class="column">

                <div class="intro-content__text">

                    <h3>
                        Erqmaed
                    </h3>

                    <h1>
                        Tacking psychosocial problems <br>
                        through ART, media <br>
                        and intermediary services. <br>
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

    <!-- ============ Main ============= -->
    <main id="main">

        <!-- ========================= Info ========================= -->
        <section id="nav" class="nav-bar"
            style="background: #ffffff !important; background-color: white !important; padding-top: 2rem !important; padding-bottom: 2rem !important; font-weight: 500 !important;">
            <div class="container d-flex align-items-center">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('project') }}">Projects</a></li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- ======= Unique Features Section ======= -->
        <section id="discover-us" class="discover-us s-info">

            <h1 class="text-center font-weight-bolder text-uppercase mt-3"
                style="color: #191A2E !important; margin-top: .6rem !important; margin-bottom: .2rem !important;">Who We
                Are</h1>
            <p class="text-center text-lowercase mt-2" style="color: #191A2E !important;"><span
                    style="font-weight: bold !important;"><span
                        style="color: #75AEC7 !important;">erq</span>ma'ed</span> is a unique platform that has bring
                forth the necessary accumen for facing mental health</p>

            <div class="container my-5">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center content">
                                    <div class="icon"><i class="icofont-users-social"></i></div>
                                    <h4 class="title">Social Change</h4>
                                    <p class="description"><span class="font-weight-bolder"><span
                                                style="color: #75AEC7b3 !important;">erq</span>ma'ed</span> believes
                                        that every human being should live with peace and love in society, and so our
                                        work helps develop community responsibility</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center content">
                                    <div class="icon"><i class="icofont-brain-alt"></i></div>
                                    <h4 class="title">Psychological Awareness</h4>
                                    <p class="description"><span class="font-weight-bolder"><span
                                                style="color: #75AEC7b3 !important;">erq</span>ma'ed</span> solves
                                        social and psychological problems that women, youth, and traumatic children
                                        face. We increase awareness and build skills
                                        for a healthy livelihood</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center content">
                                    <div class="icon"><i class="icofont-holding-hands"></i></div>
                                    <h4 class="title">Unequivical</h4>
                                    <p class="description"><span class="font-weight-bolder"><span
                                                style="color: #75AEC7b3 !important;">erq</span>ma'ed</span> believes in
                                        a win-win strategy; enabling all who come to us to solve their psychological and
                                        social problems by themselves with peaceful discussion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Unique Features Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <h1 class="text-center font-weight-bolder text-uppercase mt-5" style="color: #191A2E !important;">Radio
                Series</h1>
            <p class="text-center text-lowercase mt-2"
                style="color: #191A2E !important; font-weight: normal !important;">Here at <span class="font-weight-bolder"><span
                    style="color: #75AEC7b3 !important;">erq</span>maed</span> we have an extensive experience and a guranteeing arsenal of professionals in content production and livestreaming.</p>

            <div class="container my-5">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-4 col-md-6 justify-content-center text-center">
                        <div class="card mx-3 text-center" style="width: fit-content !important;">
                            <div class="card-body text-center">
                                <iframe width="300" src="https://www.youtube.com/embed/0II6pIWGNg4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 align-items-center">
                        <div class="card mx-3 text-center" style="width: fit-content !important;">
                            <div class="card-body text-center">
                                <iframe width="300" src="https://www.youtube.com/embed/0II6pIWGNg4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 align-items-center">
                        <div class="card mx-3 text-center" style="width: fit-content !important;">
                            <div class="card-body text-center">
                                <iframe width="300" src="https://www.youtube.com/embed/0II6pIWGNg4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End About Us Section -->

        <section class="highlight">
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <h4 style="text-align: right !important;"><span class="font-weight-bolder"><span
                                    style="color: #75AEC7b3 !important;">erq</span>maed</span> upholds <span
                                style="color: #75AEC7b3 !important;" class="font-weight-bolder">posterity</span>, and
                            brings forth social purpose</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel">
                            <img src="../../public/img/temp/projects/1.jpg" alt="">
                            <img src="../../public/img/temp/projects/2.jpg" alt="">
                            <img src="../../public/img/temp/projects/3.jpg" alt="">
                            <img src="../../public/img/temp/projects/4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section class="blog" style="background-color: #ffffff !important;">
            <h1 class="text-center font-weight-bolder text-uppercase mt-5" style="padding-bottom: 4rem !important;">Latest Blogs</h1>

            <div class="row blog justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                    <div class="card well">
                        <img src="{{ url('img/temp/blogs') }}/2.jpg" class="card-img-top" alt="title">
                        <div class="card-body">
                            <div class="row mb-2 mx-auto justify-content-center">
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-user mr-2'></i>Bezawit Bekalu</small>
                                </div>
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-calendar mr-2'></i>Feb 24,
                                        2022</small>
                                </div>
                            </div>
                            <h5 class="card-title">Dine and Heal - ART Project</h5>
                            <p class="font-weight-normal" style="font-size: small !important;">After passing through
                                war, negative childhood experiences, natural disasters, sexual assault, the sudden death
                                of a loved one, and other traumatic experiences people may develop ...</p>
                            <a href="#" class="btn btn-outline-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                    <div class="card well">
                        <img src="{{ url('img/temp/blogs') }}/2.jpg" class="card-img-top" alt="title">
                        <div class="card-body">
                            <div class="row mb-2 mx-auto justify-content-center">
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-user mr-2'></i>Bezawit Bekalu</small>
                                </div>
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-calendar mr-2'></i>Feb 24,
                                        2022</small>
                                </div>
                            </div>
                            <h5 class="card-title">Dine and Heal - ART Project</h5>
                            <p class="font-weight-normal" style="font-size: small !important;">After passing through
                                war, negative childhood experiences, natural disasters, sexual assault, the sudden death
                                of a loved one, and other traumatic experiences people may develop ...</p>
                            <a href="#" class="btn btn-outline-primary" style="margin-top: 2px !important; margin-bottom: 2px !important; margin-left: 4px !important; margin-right: 4px !important;">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center">
                    <div class="card well">
                        <img src="{{ url('img/temp/blogs') }}/2.jpg" class="card-img-top" alt="title">
                        <div class="card-body">
                            <div class="row mb-2 mx-auto justify-content-center">
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-user mr-2'></i>Bezawit Bekalu</small>
                                </div>
                                <div class="col" style="font-size: smaller !important;">
                                    <small class="text-muted"><i class='bx bx-calendar mr-2'></i>Feb 24,
                                        2022</small>
                                </div>
                            </div>
                            <h5 class="card-title">Dine and Heal - ART Project</h5>
                            <p class="font-weight-normal" style="font-size: small !important;">After passing through
                                war, negative childhood experiences, natural disasters, sexual assault, the sudden death
                                of a loved one, and other traumatic experiences people may develop ...</p>
                            <a href="#" class="btn btn-outline-primary">Read</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients" style="background-color: #dedfe6 !important;">
            <h1 class="text-center font-weight-bolder text-uppercase mt-5 mb-3">Our Partners</h1>

            <div class="owl-carousel clients-carousel">
                <img src="../../public/img/clients/client-1.png" alt=""
                    style="width:75% !important; padding-top: 15px !important; padding-left: 25px !important; padding-right: 25px !important; margin-left: 20px !important; margin-right: 20px !important;">
                <img src="../../public/img/clients/client-1.png" alt=""
                    style="width: auto !important; max-height: 120px !important;">
                <img src="../../public/img/clients/client-1.png" alt=""
                    style="width:75% !important; padding: 1em !important;">
            </div>
        </section>
        <!-- End Our Clients Section -->

    </main><!-- End #main -->

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
            <hr class="text-center mt-5 mb-2 pb-0 mx-auto" style="border-color: #75AEC7; width: 40%" />
            <div class="copyright mt-1 pt-0">
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

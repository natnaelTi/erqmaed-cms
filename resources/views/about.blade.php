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
    <!-- ======= Hero Section ======= -->
    <section id="intro" class="s-intro s-intro--slides">
        <div class="intro-slider">
            <div class="intro-slider-img bg-opacity-40"
                style="background-image: url({{ url('/img') }}/about/slides/slide-01.jpg);"></div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/about/slides/slide-02.jpg);">
            </div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/about/slides/slide-03.jpg);">
            </div>
            {{-- <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/about/slides/slide-04.jpg);">
            </div>
            <div class="intro-slider-img" style="background-image: url({{ url('/img') }}/about/slides/slide-05.jpg);">
            </div> --}}
        </div>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row intro-content">

            <div class="column">

                <div class="intro-content__text">

                    <h3>
                        erqmaed
                    </h3>

                    <h1 style="font-size: 48px !important; max-width: 80% !important;">
                        <span style="font-weight: bolder !important;"><span
                                style="color: #75AEC7 !important">erq</span>ma'ed</span></span> believes that every
                        human being should live with <span
                            style="color: #75AEC7 !important; font-weight: 700 !important;">peace</span> and <span
                            style="color: #75AEC7 !important; font-weight: 700 !important;">love</span> in society, and
                        work towards developing community <span
                            style="color: #75AEC7 !important; font-weight: 700 !important;">responsibility</span>.
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

    {{-- <section id="hero">
          <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox"> --}}

    <!-- Slide 1 -->
    {{-- <div class="carousel-item active" style="background-image: url({{url('img')}}/concept.svg); background-size: 110% !important;">
                <div class="carousel-container">
                    <div class="container position-relative text-center text-lg-left">
                      <div class="row">
                        <div class="col-lg-8">
                          <h4 class="animate__animated animate__fadeInDown mb-5 pb-3"><span style="font-weight: 700 !important;"><span style="color: #75AEC7 !important">erq</span>ma'ed</span> believes that every human being should live with <span style="color: #75AEC7 !important; font-weight: 700 !important;">peace</span> and <span style="color: #75AEC7 !important; font-weight: 700 !important;">love</span> in society, and work towards developing community <span style="color: #75AEC7 !important; font-weight: 700 !important;">responsibility</span>.</h4>
                          <a href="#featured-services" class="btn btn-primary ml-5" style="color: white !important;">Explore <i class='bx bxs-chevrons-down pl-1'></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex align-self-center justify-content-start">
                      <img src="{{url('img/logo')}}/logo.png" style="width: 100% !important;">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
    <!-- End Hero -->

    <main id="main">
        <!-- ========================= Info ========================= -->
        <section id="nav" class="nav-bar"
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
        <section id="featured-services" class="featured-services section-bg"
            style="color: #191A2E !important; background-color: #e0e0e0 !important;">
            <div class="section-title">
                <h1 class="text-center font-weight-bolder text-uppercase mt-5" style="color: #191A2E !important;">About
                    Us</h1>
                <p class="text-center text-lowercase mt-2"
                    style="color: #191A2E !important; font-weight: 500 !important;">erqma'ed gets involved in projects
                    solving the social and psychological problems of the community regardless of age, sex, religion,
                    race, and political outlook</p>
            </div>
            <div class="container my-5">
                <div class="row no-gutters align-items-center">
                    <div class="col-6">
                        <img src="{{ url('img/temp/about') }}/about.png" style="width: 80% !important;"
                            alt="mental health awareness">
                    </div>
                    <div class="col-6 about">
                        <h3 class="mb-4">Psycho-Social Health at Heart</h3>
                        <p style="font-weight: normal !important;"><span style="font-weight: bolder !important;"><span
                                    style="color: #75AEC7 !important;">erk</span>ma'ed Media and Communication</span>
                            <i>(Posterity)</i> PLC is a social enterprise based in Addis Adaba, Ethiopia. It's the first
                            organization to start live radio reconciliation programs among divorced couples and create
                            psychological awareness in the society through live radio program.
                        </p>
                        <p style="font-weight: normal !important;">In Principal, <span
                                style="font-weight: bolder !important;"><span
                                    style="color: #75AEC7 !important;">erk</span>ma'ed</span> is founded to solve the
                            social and psychological problems of the community regardless of age, sex, religion, race,
                            and political outlook. And now it employs nearly 20 experienced counselors to deliver our
                            psychological therapy and motivational psychology training programs seven days per week and
                            12 hours per day.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Unique Features Section -->

        <!-- ======= Unique Features Section ======= -->
        <section id="discover-us" class="discover-us s-info" style="background-color: white !important;">

            <div class="section-title">
                <h1 class="text-center font-weight-bolder text-uppercase mt-5" style="color: #191A2E !important;">
                    Services</h1>
                <p class="text-center text-lowercase mt-2 pb-2"
                    style="color: #191A2E !important; font-weight: 500 !important;"><span
                        class="font-weight-bolder"><span
                            style="color: #75AEC7b3 !important;">erq</span>ma'ed</span>works to bring a mentally stable
                    society, psychologically healed generation, and consciously decision-making community</p>
            </div>
            <div class="container my-5">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center">
                                    <div class="icon"><i class="icofont-bubble-up"></i></div>
                                    <h4 class="title"><a href="">Awareness Resillience for Trauma (ART)</a>
                                    </h4>
                                    <p class="description">We provide <b>Corporate Wellness</b>, <b>Organisational
                                            Psychology</b>, <b>Youth and Women Empowerment</b>, <b>Self Development
                                            Training</b> enabling higher productivity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center">
                                    <div class="icon"><i class="icofont-users-alt-2"></i></div>
                                    <h4 class="title"><a href="">Psychosocial Support</a></h4>
                                    <p class="description">To care about mental health means to bring attention to
                                        the unspoken. We provide one-on-one and group sessions on appointement and
                                        pre-set schedules.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center">
                                    <div class="icon"><i class="icofont-doctor-alt"></i></div>
                                    <h4 class="title"><a href="">Corporate Wellness Program</a></h4>
                                    <p class="description">We have a pool of aclaimed and qualified counselors
                                        to bring ease. We bring you <b>Individual and Group
                                            Therapy Sessions</b>, <b>Trauma Healing</b>, <b>Family and Couples
                                            Therapy</b> and <b>Meditation</b>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box text-center">
                                    <div class="icon"><i class="icofont-tasks-alt"></i></div>
                                    <h4 class="title"><a href="">Mental Health Awareness</a></h4>
                                    <p class="description">Through our radio and TV
                                        productions, and up-kept social media outlets on <a
                                            href="https://www.youtube.com/c/Erkmead?sub_confirmation=1"
                                            class="font-weight-bolder">YouTube</a> and <a
                                            href="https://www.facebook.com/ErqMaed"
                                            class="font-weight-bolder">Facebook</a> we bring you regular updates and
                                        information on psycho-social health.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Unique Features Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{url('/img')}}/team/av.png" alt="">
                            <h4>Ephrem Bekele</h4>
                            <span>Chief Executive Officer</span>
                            <p>
                                Graduated from AAU in psychology and international studies, Ephrem is the cofounder and has been working as the CEO since 2014
                            </p>
                            <div class="social" style="color: #191a2e !important;">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{url('/img')}}/team/av.png" alt="">
                            <h4>Tigist Waltenigus</h4>
                            <span>Product Manager</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                rerum temporibus
                            </p>
                            <div class="social" style="color: #191a2e !important;">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{url('/img')}}/team/av.png" alt="">
                            <h4>Endalk Teshome</h4>
                            <span>CTO</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                toro des clara
                            </p>
                            <div class="social" style="color: #191a2e !important;">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{url('/img')}}/team/av.png" alt="">
                            <h4>Frezer Abegaz</h4>
                            <span>CTO</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                toro des clara
                            </p>
                            <div class="social" style="color: #191a2e !important;">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2 class="mt-5">Contact Us</h2>
                    <p style="color: #191A2E !important; font-weight: 500 !important;">We can only get better with your
                        support. Send us your comments, your feedbacks. It will help us immensly to better ourselves.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>Mickey Leland St, Addis Ababa, NB Business Center, 8F/801</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:info@erqmaed.org">info@erqmaed.org</a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><a href="tel:+251 91 138 0544">+251 91 138 0544</a></p>
                                <p><a href="tel:+251 92 133 3331">+251 92 133 3331</a></p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.5874261402882!2d38.77848111410477!3d9.010056491767878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85964c8b8c7d%3A0x55f46e9e9e38b9f!2sErk%20Mead!5e0!3m2!1sen!2set!4v1645707906048!5m2!1sen!2set"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <!-- @if (Session::has('success'))
<div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
@endif -->
                        <form action="" method="post" role="form" class="php-email-form">
                            <!-- @csrf -->

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <!-- @if ($errors->has('name'))
<div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
@endif -->
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Your Email</label>
                                    <input type="email"
                                        class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                        id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <!-- @if ($errors->has('email'))
<div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
@endif -->
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                    name="subject" id="subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <!-- @if ($errors->has('subject'))
<div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
@endif -->
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="10"
                                    data-rule="required" data-msg="Please write something for us"></textarea>
                                <!-- @if ($errors->has('message'))
<div class="error">
                                    {{ $errors->first('message') }}
                                </div>
@endif -->
                                <div class="validate"></div>
                            </div>
                            <!-- <div class="mb-3">
                            <div class="loading">{{ __('Loading') }}</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{ __('Your message has been sent. Thank you!') }}</div>
                        </div> -->
                            <div class="text-center"><button type="submit" name="send" value="Submit">Send
                                    Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

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

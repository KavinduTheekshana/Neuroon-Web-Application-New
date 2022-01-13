<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>TechBuzz - Multipurpose Technology HTML5 Template</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    {{-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="Z" class="letters-loading">
                        Z
                    </span>
                    <span data-text-preloader="Z" class="letters-loading">
                        Z
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- preloader end -->

    <!-- header start -->
    <header class="header">
        <div class="header__top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="header__top--info">
                            <ul>
                                <li><a href="mailto:info@webmail.com"><span class="icon"><i
                                                class="fal fa-envelope"></i></span> info@neuroon.lk</a></li>
                                <li><a href="tel:9878768648765"><span class="icon"><i class="fal fa-phone"></i></span>
                                        +94 71 251 5020</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-12">
                        <div class="header__top--info--right">
                            {{-- <div class="lang">
                                <div class="lang__icon">
                                    <a href="#0" class="lang__btn">English <i class="fal fa-angle-down"></i></a>
                                    <ul class="lang__list">
                                        <li><a href="#0">USA</a></li>
                                        <li><a href="#0">UK</a></li>
                                        <li><a href="#0">CA</a></li>
                                        <li><a href="#0">AU</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <a href="careers" class=" job-btn {{ Request::segment(1) === 'careers' ? 'active' : null }}"><i class="fal fa-briefcase"></i>&nbsp; Careers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navarea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 my-auto">
                        <div class="header__logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo-fq.svg" width="170px">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="header__menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/"
                                            class="{{ Request::segment(1) === null ? 'active' : null }}">Home</a></li>

                                    {{-- <li><a href="about"
                                            class="{{ Request::segment(1) === 'about' ? 'active' : null }}">About</a>
                                    </li> --}}

                                    <li><a href="about"
                                            class="{{ Request::segment(1) === 'about' ? 'active' : null }}">About <span>+</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="about" class="{{ Request::segment(1) === 'about' ? 'active' : null }}">About</a></li>
                                            <li><a href="services" class="{{ Request::segment(1) === 'services' ? 'active' : null }}">Services</a></li>
                                            <li><a href="faq" class="{{ Request::segment(1) === 'faq' ? 'active' : null }}">Faq</a></li>
                                        </ul>
                                    </li>


                                    {{-- <li><a href="about.html">Services</a></li> --}}
                                    <li><a href="portfolio" class="{{ Request::segment(1) === 'portfolio' ? 'active' : null }}">Portfolio</a></li>
                                    <li><a href="why" class="{{ Request::segment(1) === 'why' ? 'active' : null }}">Why us</a></li>
                                    <li><a href="blog" class="{{ Request::segment(1) === 'blog' ? 'active' : null }}">Blog</a></li>



                                    <li><a href="contact"
                                            class="{{ Request::segment(1) === 'contact' ? 'active' : null }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
                        <div class="navarea__right">
                            <a href="contact.html" class="site-btn">Get A Quote <span>+</span></a>
                            <button class="search-trigger">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    @yield('content')



    <!-- footer area start -->
    <footer class="site-footer bg_img pt-100" data-background="assets/images/pattern/footer-pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <a href="index.html" class="site-logo mb-50">
                        <img src="assets/images/logo/logo-fq.svg" alt="Logo" width="170px">
                    </a>
                </div>
                <div class="col-xl-12">
                    <div class="footer-top mt-50 mb-80">
                        <div class="footer__info">
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="assets/images/icons/footer-info-icon-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone Number</h4>
                                    <a href="tel:98787676576577">+94 71 251 5020</a>
                                </div>
                            </div>
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="assets/images/icons/footer-info-icon-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Address</h4>
                                    <a href="mailto:info@webmail.com">info@neuroon.com</a>
                                </div>
                            </div>
                            <div class="footer__info--item d-flex align-items-center">
                                <div class="icon mr-20">
                                    <img src="assets/images/icons/footer-info-icon-3.png" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Office Address</h4>
                                    <span>629/1,
                                        Pinketha Road,
                                        Homagama.</span>
                                </div>
                            </div>
                        </div>
                        <button id="scroll-top" class="site-btn transparent"><i class="fal fa-long-arrow-up"></i>
                            <span>Back To Top</span> <i class="fal fa-long-arrow-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">Services</h4>
                        <div class="row no-gutters">
                            <div class="col">
                                <ul>
                                    <li><a href="service-details.html">IT Software</a></li>
                                    <li><a href="service-details.html">IT Support</a></li>
                                    <li><a href="service-details.html">IT Platforms</a></li>
                                    <li><a href="service-details.html">Cloud Computing</a></li>
                                    <li><a href="service-details.html">Cyber Security</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="service-details.html">IT Software</a></li>
                                    <li><a href="service-details.html">IT Support</a></li>
                                    <li><a href="service-details.html">IT Platforms</a></li>
                                    <li><a href="service-details.html">Cloud Computing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-sm-6 col-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">Menu</h4>
                        <ul>
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">About</a></li>
                            <li><a href="#0">Services</a></li>
                            <li><a href="#0">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-sm-6 col-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">Follow Us</h4>
                        <ul>
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Linkedin</a></li>
                            <li><a href="contact.html">Youtube</a></li>
                            <li><a href="services.html">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="footer__widget">
                        <h4 class="title mb-30">News Feeds</h4>
                        <div class="newsfeed__wrap">
                            <div class="newsfeed__item mb-20">
                                <div class="thumb">
                                    <img src="assets/images/news/news-small-3.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="news-details.html">We are specialists in both
                                            economics and information</a></h4>
                                </div>
                            </div>
                            <div class="newsfeed__item">
                                <div class="thumb">
                                    <img src="assets/images/news/news-small-4.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="news-details.html">We are specialists in both
                                            economics and information</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright-text mt-60">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <p>© <span>2022</span> Neuroon Informatic |
                                    All Rights Reserved </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->

    <!--========= JS Here =========-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/js_jquery.knob.js"></script>
    <script src="assets/js/js_jquery.appear.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
    </script>
</body>

</html>
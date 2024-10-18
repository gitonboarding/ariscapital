<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>Aris Capital</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png')}}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnify.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
</head>

<body>
    <main class="page-wrapper">
        <header class="rainbow-header header-default header-left-align header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-11 col-md-6 col-4 position-static">
                        <div class="header-left d-flex">
                            <div class="logo">
                                <a href="{{'/'}}">
                                    <img class="logo-light" src="{{ asset('frontend/assets/images/logo/aris-white.png')}}" alt="Corporate Logo">
                                    <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/aris-logo.png')}}" alt="Corporate Logo">
                                </a>
                            </div>
                            <nav class="mainmenu-nav d-none d-lg-block">

                                <ul class="mainmenu">
                                    <li><a href="{{'/'}}">Home</a></li>
                                    <li class="has-droupdown has-menu-child-item"><a href="{{url ('/about')}}">About Us</a>
                                        <ul class="submenu">
                                            <li><a href="portfolio.html">Aris Team</a></li>
                                            <li><a href="portfolio-three-column.html">Board</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url ('/services')}}">Services</a></li>
                                    <li><a href="#">Media & News</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Locations</a></li>
                                    <li><a href="#">Important Information</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 col-8">
                        <div class="header-right">

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                            <!-- Start Switcher Area  -->
                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="{{ asset('frontend/assets/images/icons/sun-01.svg')}}" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="{{ asset('frontend/assets/images/icons/vector.svg')}}" alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Start Switcher Area  -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="with-megamenu has-menu-child-item position-relative"><a href="#">Home</a>
                        <div class="rainbow-megamenu with-mega-item-2">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-6 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="index-landing.html">Sass Landing <span class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="index-application.html">Application <span class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="index-collaborate.html">Collaborate <span class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="index-business-consulting.html">Business Consulting</a></li>
                                            <li><a href="index-business-consulting-2.html">Business Consulting 02</a></li>
                                            <li><a href="index-magazine.html">Magazine <span class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="index-corporate.html">Corporate</a></li>
                                            <li><a href="index-business.html">Business</a></li>
                                            <li><a href="index-digital-agency.html">Digital Agency</a></li>
                                            <li><a href="index-finance.html">Finance</a></li>
                                            <li><a href="index-company.html">Company</a></li>
                                            <li><a href="index-marketing-agency.html">Marketing Agency</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="index-travel-agency.html">Travel Agency</a></li>
                                            <li><a href="index-consulting.html">Consulting</a></li>
                                            <li><a href="index-seo-agency.html">SEO Agency</a></li>
                                            <li><a href="index-personal-portfolio.html">Personal Portfolio</a></li>
                                            <li><a href="index-event-conference.html">Event Conference</a></li>
                                            <li><a href="index-creative-portfolio.html">Creative Portfolio</a></li>
                                            <li><a href="index-freelancer.html">Freelancer</a></li>
                                            <li><a href="index-international-consulting.html">International Consulting</a></li>
                                            <li><a href="index-startup.html">Startup</a></li>
                                            <li><a href="index-web-agency.html">Web Agency</a></li>
                                            <li><a href="index-corporate-one-page.html">Corporate One Page <span class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="index-photographer.html">Photographer <span class="rainbow-badge-card">New</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="with-megamenu has-menu-child-item"><a href="#">Elements</a>
                        <div class="rainbow-megamenu">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="button.html">Button</a></li>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="counter.html">Counter</a></li>
                                            <li><a href="progressbar.html">Progressbar</a></li>
                                            <li><a href="accordion.html">Accordion</a></li>
                                            <li><a href="social-share.html">Social Share</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="timeline.html">Timeline</a></li>
                                            <li><a href="tab.html">Tab</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="split.html">Split Section</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="call-to-action.html">Call To Action</a></li>
                                            <li><a href="video.html">Video</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="brand.html">Brand</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="error.html">404</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="advance-tab.html">Advance Tab <span
                                                        class="rainbow-badge-card">Hot</span></a></li>
                                            <li><a href="brand-carouse.html">Brand Carousel <span
                                                        class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="advance-pricing.html">Advance Pricing <span
                                                        class="rainbow-badge-card">Hot</span></a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy <span
                                                        class="rainbow-badge-card">New</span></a></li>
                                            <li><a href="login.html">Profile <span
                                                        class="rainbow-badge-card">New</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="has-droupdown has-menu-child-item"><a href="#">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                            <li><a href="blog-list-view.html">Blog List View</a></li>
                            <li><a href="blog-list-sidebar.html">Blog List View Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown has-menu-child-item"><a href="#">Portfolio</a>
                        <ul class="submenu">
                            <li><a href="portfolio.html">Portfolio Default</a></li>
                            <li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
                            <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                            <li><a href="portfolio-grid-layout.html">Portfolio Grid Layout</a></li>
                            <li><a href="portfolio-box-layout.html">Portfolio Box Layout</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>







            </div>
        </div>

        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->

        @yield('contents')



        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default variation-two">
            <div class="rainbow-callto-action clltoaction-style-default style-7">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper">
                        <div class="col-lg-8 col-md-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img class="logo-light" src="{{ asset('frontend/assets/images/logo/aris-white.png')}}" alt="Corporate Logo">
                                            <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/aris-logo.png')}}" alt="Corporate Logo">
                                        </a>
                                    </div>
                                    <p class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">Accelerate growth with customized commercial vehicle financing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <div class="call-to-btn text-left mt_sm--20 text-lg-right">
                                <a class="btn-default" href="#">Enquire Now
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Services</h4>
                                {{--<div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="service.html">Service</a></li>
                                    </ul>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                    <h4 class="title">Solutions</h4>
                                    {{--<div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="brand.html">Brand</a></li>
                                            <li><a href="call-to-action.html">call To Action</a></li>
                                            <li><a href="counter.html">Counter</a></li>
                                            <li><a href="service.html">Service</a></li>
                                        </ul>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Company</h4>
                                {{--<div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="tab.html">Tab Styles</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="social-share.html">Social</a></li>
                                    </ul>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Resources</h4>
                                {{--<div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="timeline.html">Timeline</a></li>
                                    </ul>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Stay With Us.</h4>
                                <div class="inner">
                                    <h6 class="subtitle">2000+ Our clients are subscribe Around the World</h6>
                                    <ul class="social-icon social-default justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.linkdin.com/">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <ul class="ft-menu link-hover">
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">© Copyright 2024, Aris Capital</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/feather.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/sal.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/masonry.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imageloaded.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/magnify.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/lightbox.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/easypie.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/text-type.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.style.swicher.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-one-page-nav.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
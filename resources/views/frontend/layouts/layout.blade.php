<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aris Capital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <script>
        // Function to bypass browser cache
    </script>

    <!-- Start Include All CSS -->
    <!-- Include All CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themewar-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/quera-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">

    <!-- Revolution Slider Setting CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/settings.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/preset.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ignore_for_wp.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">




    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPk5oNPOBry4jdtZ56O5v5CDMdhUg6Zs4"></script>


   

</head>

<body>

    <!-- Preloading -->
    <div class="preloader clock text-center">
        <div class="queraLoader">
            <div class="loaderO">
                <span>A</span>
                <span>R</span>
                <span>I</span>
                <span>S</span>
            </div>
        </div>
    </div>
    <!-- Preloading -->

    <!-- Header Start -->
    <header class="header02 isSticky">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar01">
                        <div class="navleft">
                            <nav class="mainMenu">
                                <ul>
                                    <li class="current-menu-item"><a href="#">Home</a></li>
                                    <li><a href="{{url('/')}}#about-us">About Us</a></li>
                                    <li><a href="{{url('our-board-of-directors')}}">Board of Directors</a></li>
                                    <li><a href="{{url('our-team')}}">Our Team</a></li>
                                    <li><a href="{{url('/important-information')}}">Important Information</a></li>
                                    <li><a href="{{url('/')}}#locations">Locations</a></li>
                                    <li><a href="{{url('media')}}">Media</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="accessNav">
                                <a href="javascript:void(0);" class="menuToggler"><i class="twi-bars1"></i></a>
                            </div>
                        </div>
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{ asset('frontend/assets/images/logo.png')}}" alt="Dgita"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Begin:: Popup Menu -->
    <section class="sidebarMenu">
        <div class="sidebarMenuOverlay"></div>
        <div class="SMArea">
            <div class="SMAHeader">
                <h3>
                    <i class="twi-bars1"></i> Menu
                </h3>
                <a href="javascript:void(0);" class="SMACloser"><i class="twi-times2"></i></a>
            </div>
            <div class="SMABody">
                <ul>
                    <ul>
                        <li class="current-menu-item"><a href="#">Home</a></li>
                        <li><a href="{{url('/')}}#about-us">About Us</a></li>
                        <li><a href="{{url('our-board-of-directors')}}">Board of Directors</a></li>
                        <li><a href="{{url('our-team')}}">Our Team</a></li>
                        <li><a href="{{url('/important-information')}}">Important Information</a></li>
                        <li><a href="{{url('/')}}#locations">Locations</a></li>
                        <li><a href="{{url('media')}}">Media</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>

    @yield('contents')
    <div class="bottombar02">
        <div class="disclaimer">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="be-aware">
                    <p>DO NOT MAKE ANY CASH PAYMENT. ONLY ONLINE PAYMENT. VERIFY MR, NOC, SETTLEMENT - CALL: 09073907115
                        / 07225026690 - customercare@ariscapital.in</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>कृपया नकद भुगतान न करें। केवल ऑनलाइन भुगतान करें। एमआर, एनओसी, सेटलमेंट की पुष्टि करें - कॉल
                        करें: 09073907115 / 07225026690 - customercare@ariscapital.in</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>કૃપયા રોકડ ચૂકવણી ન કરો. ફક્ત ઑનલાઇન ચૂકવણી કરો. એમઆર, એનઓસી, સેટલમેન્ટની ખાતરી કરો - ફોન કરો:
                        09073907115 / 07225026690 - customercare@ariscapital.in</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>कृपया रोख रक्कम देऊ नका. फक्त ऑनलाइन पेमेंट करा. एमआर, एनओसी, सेटलमेंट याची खात्री करा - कॉल करा:
                        09073907115 / 07225026690 - customercare@ariscapital.in</p>
                </div>
            </marquee>
            <div class="mascot-bottom">
                <img src="assets/images/mascot-2.png" alt="">
            </div>
        </div>
        <!-- <div class="disclaimer02">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div> -->
    </div>

    <!-- Footer Section -->
    <footer class="fcopyright">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-md-4">
                    <p>© 2024 Aris Capital. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="copyMenu">
                        <ul>
                            <li><a href="{{url('Privacy-Policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('disclaimer')}}">Disclaimer</a></li>
                            <li><a href="{{url('terms-of-service')}}">Terms of services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-links">
                        <ul>
                            <li><a href=""><i class="bi bi-facebook"></i></a></li>
                            <li><a href=""><i class="bi bi-instagram"></i></a></li>
                            <li><a href=""><i class="bi bi-linkedin"></i></a></li>
                            <li><a href=""><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include All JS -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/shuffle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gmaps.js') }}"></script>

    <!-- Slider Revolution Main Files -->
    <script src="{{ asset('frontend/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Slider Revolution Extensions -->
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>



    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            autoplay: 1000, // time for slides changes
            loop: true,
            margin: 10,
            smartSpeed: 1000, // duration of change of 1 slide
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 2,
                    nav: true,
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: true,
                }
            }
        })
    </script>

    <script>
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.mascot-bottom').addClass('show');
            } else {
                $('.mascot-bottom').removeClass('show');
            }
        });
    </script>

    @yield('js')



</body>

</html>
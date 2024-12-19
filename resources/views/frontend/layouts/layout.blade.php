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


    <style>
        .main-section {
            background-image: url("{{ asset('frontend/assets/images/background.png') }}");
            background-size: cover;
            background-position: center;
            padding: 30px 0 60px;
        }

        .main-logos {
            position: relative;
        }

        .text-logo {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .text-tagline {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            text-align: center;
        }

        .text-tagline h4 {
            font-size: 20px;
            color: #fff;
            font-weight: 500;
            margin-bottom: 0;
        }

        .text-logo img {
            width: 100%;
        }

        .hero-logo {
            text-align: center;
        }

        .hero-logo img {
            width: 85%;
            text-align: center;
        }

        .raftar-qr {
            text-align: center;
        }

        .raftar-qr img {
            margin-top: 10px;
            width: 35%;
        }

        .raftar-qr h5 {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 0px;
        }

        .raftar-qr p {
            color: #fff;
            margin-bottom: 0px;
            line-height: 20px;
            font-size: 14px;
        }

        .header02 {
            display: none;
        }

        .fixedHeader.header02 {
            display: block;
            z-index: 9;
        }

        .mainMenu {
            display: none;
        }

        header .menuToggler {
            display: block !important;
        }

        .hero-section-1 {
            background-image: url("{{ asset('frontend/assets/images/banner.jpg')}}");
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-section-1:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
        }

        .hero-section-1:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            background: url("{{ asset('frontend/assets/images/bg/20.png')}}") no-repeat left center;
            background-size: contain;
        }

        .chooseSection1 {
            position: relative;
            padding: 60px 0;
            background: url("{{ asset('frontend/assets/images/bg/5.png')}}") no-repeat top center;
            background-size: contain;
        }

        .serviceSection01 .secTitle {
            color: #283891;
        }

        .icon_box_05:hover .ib_box {
            color: #fff;
        }

        .car-loan {
            position: relative;
            z-index: 1;
        }

        #chartdiv {
            width: 100%;
            height: 500px;
            background: hsl(0deg 0% 95.28% / 28%);
        }

        .am5-layer-0 {
            padding: 25px;
        }
    </style>

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

    <script>
        function initMap() {
            // Center the map on India
            const indiaCenter = {
                lat: 24.0582407,
                lng: 77.847189
            };

            // Create the map instance
            const map = new google.maps.Map(document.getElementById("map"), {
                center: indiaCenter,
                zoom: 4, // Adjusted for a full view of India
                strictBounds: true
            })

            // Hotspot data
            const hotspots = [{
                    latitude: 23.0225,
                    longitude: 72.5714,
                    name: "AHMADABAD",
                    address: "C/197, 2nd Floor Sumel Bussines Park 2 B/h: Vanijya Bhavan, Kankaria, 380022",
                },
                {
                    latitude: 20.703,
                    longitude: 77.0204,
                    name: "AKOLA",
                    address: "201, 2nd Floor Kashi Nath Sankul, Durga Chowk, JatharPeth Road, Akola, Maharashtra, 444005",
                },
                {
                    latitude: 20.9376,
                    longitude: 77.7792,
                    name: "AMRAVATI",
                    address: "Shop No-4, Bansod Plaza, Behind Palekar Bakery Bus Stand Road, Amravati, Maharashtra, 444601",
                },
                {
                    latitude: 19.8762,
                    longitude: 75.3441,
                    name: "AURANGABAD",
                    address: "N-5, F-35 1st Floor,Near Dashmesh hotel, Bajrang Chowk, In Front of Lokseva Book Stall CIDCO- Aurangabad, Maharashtra, 431001",
                },
                {
                    latitude: 21.78,
                    longitude: 72.15,
                    name: "BHAVNAGAR",
                    address: "EVA-1 COMPLEX AATABHAI CHOCK BHAVNAGAR-364001",
                },
                {
                    latitude: 23.25,
                    longitude: 69.21,
                    name: "BHUJ",
                    address: "201, Balram Complex, Station Road Bhuj-Kutch (Gujarat), 370001",
                },
                {
                    latitude: 20.4904,
                    longitude: 75.1246,
                    name: "CHALISGAON",
                    address: "Near Tendulkar Hospital, Hirapur Road,Chalisgaon Dist. Jalgaon, 424101",
                },
                {
                    latitude: 20.5544,
                    longitude: 75.8905,
                    name: "CHIKHLI",
                    address: "Plot No.112, Wadhwani Cement House Behind Tuljai Hospital Khandala Road, Chikhli, Dist. Buldhana, 443201",
                },
                {
                    latitude: 20.9026,
                    longitude: 74.7744,
                    name: "DHULE",
                    address: "F/4, Arihant Apartment, 1st Floor Opp. Railway Crossing Mohadi Crossing Road Dhule, 424011",
                },
                {
                    latitude: 21.0016,
                    longitude: 75.5616,
                    name: "JALGAON",
                    address: "G-25,2nd Floor, Golani Market, Jalgaon-425001, Maharashtra, 425001",
                },
                {
                    latitude: 22.47,
                    longitude: 70.0667,
                    name: "JAMANAGAR",
                    address: "224, Siddhanath Complex K.V. Road, Jamanagar, Gujarat, 361001",
                },
                {
                    latitude: 21.5678,
                    longitude: 75.5208,
                    name: "KHARGONE",
                    address: "SHOP NO. 211,221 VIJAY LAXMI HOSPITAL BUILDING. IN FRONT OF APOLLO MEDICAL, NEAR R.T.O. OFFICE SANAWAD ROAD, KHARGONE (M.P.), 451666",
                },
                {
                    latitude: 20.5565,
                    longitude: 74.5384,
                    name: "MALEGAON",
                    address: "31, Balaji Arcade, 60 Feet Road, Satana Naka, Malegaon-423203 Maharashtra, 423203",
                },
                {
                    latitude: 23.62,
                    longitude: 72.378,
                    name: "MEHSANA",
                    address: "S/6 2nd Floor Sigma OASIS Complex Near, Rajkamal Petrol Pump Highway Road, Mehsana ,Gujarat, 384002",
                },
                {
                    latitude: 20.7667,
                    longitude: 73.7896,
                    name: "NASHIK",
                    address: "Plot No-12, Bhole Complex, New Adgaon Naka, Agra Road, Panchavati, Bhole Nagar Nashik, 422003",
                },
                {
                    latitude: 24.116,
                    longitude: 72.6999,
                    name: "PALANPUR",
                    address: "71-2nd floor Sankrut Complex, Opp. Income Tax Office,Aburoad Highway, Palanpur, Gujarat, 385001",
                },
                {
                    latitude: 22.3,
                    longitude: 70.7833,
                    name: "RAJKOT",
                    address: "Mani Sagar Chamber, Shop No. 2 Ist Floor, opp Bank of India Kuvadva Road, Pin.360003 Rajkot, 360003",
                },
                {
                    latitude: 20.93,
                    longitude: 74.758,
                    name: "SENDWAHA",
                    address: "Opp. Government Collage, A.B. Raod, Sendhawa, M.P., 451666",
                },
                {
                    latitude: 20.9167,
                    longitude: 70.3667,
                    name: "VERAVAL",
                    address: "Prakash Complex, 1st Floor Near Durga Furniture, Rajendra Bhawan Road, Dist. Girsomnath, Veraval, 362265",
                },

            ];

            // Loop through hotspots and add markers
            hotspots.forEach(hotspot => {
                const marker = new google.maps.Marker({
                    position: {
                        lat: hotspot.latitude,
                        lng: hotspot.longitude
                    },
                    map: map,
                    title: hotspot.name,
                });

                // Add an info window for each marker
                const infoWindow = new google.maps.InfoWindow({
                    content: `
        <h4>${hotspot.name}</h4>
        <p>${hotspot.address}</p>
        `
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            });
        }

        // Initialize the map
        window.onload = initMap;
    </script>



</body>

</html>
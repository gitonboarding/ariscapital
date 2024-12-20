@extends('frontend.layouts.layout')
@section('contents')

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

<section class="main-section section-desktop" id="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-flex align-items-end">
                <div class="raftar-qr">
                    <p>https://raftar.loan</p>
                    <h5>New Customers</h5>
                    <p><i class="bi bi-telephone-fill"></i> +91 81009 87162 <br>or<br>Scan below</p>
                    <img src="{{ asset('frontend/assets/images/raftar-qr.png')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-logos">
                    <div class="text-logo">
                        <img src="{{ asset('frontend/assets/images/aris-capital.png')}}">
                    </div>

                    <div class="hero-logo">
                        <a href="{{url('/')}}#about-us">
                            <img src="{{ asset('frontend/assets/images/Aris.png')}}">
                        </a>
                    </div>

                    <div class="text-tagline">
                        <h4>India’s Leading Used Commercial Vehicle and Car Finance Company</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <div class="raftar-qr">
                    <p>http://sanjog.loan/</p>
                    <h5>Existing Customers</h5>
                    <p><i class="bi bi-telephone-fill"></i> +91 90739 07115<br>or<br>Scan below</p>
                    <img src="{{ asset('frontend/assets/images/sanjog-qr.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section section-mobile" id="home">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="main-logos">
                    <div class="text-logo">
                        <img src="{{ asset('frontend/assets/images/aris-capital.png')}}">
                    </div>

                    <div class="hero-logo">
                        <a href="#about-us">
                            <img src="{{ asset('frontend/assets/images/Aris.png')}}">
                        </a>
                    </div>

                    <div class="text-tagline">
                        <h4>India’s Leading Used Commercial Vehicle and Car Finance Company</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex align-items-end">
                <div class="raftar-qr">
                    <p>https://raftar.loan</p>
                    <h5>New Customers</h5>
                    <p><i class="bi bi-telephone-fill"></i> +91 81009 87162 <br>or<br>Scan below</p>
                    <img src="{{ asset('frontend/assets/images/raftar-qr.png')}}">
                </div>
            </div>
            <div class="col-6 d-flex align-items-end">
                <div class="raftar-qr">
                    <p>http://sanjog.loan/</p>
                    <h5>Existing Customers</h5>
                    <p><i class="bi bi-telephone-fill"></i> +91 90739 07115<br>or<br>Scan below</p>
                    <img src="{{ asset('frontend/assets/images/sanjog-qr.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Begin:: Hero Section -->
<section class="hero-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="car-loan">
                    <h1 style="color: #fff; font-weight: 600;">Giving wheels to your dreams</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Hero Section -->

<section class="chooseSection1" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="secTitle violet">Aris Capital</h2>
                <p class="secDesc violet">
                    We use our deep local and product knowledge to offer comprehensive financing solutions to our
                    customers.
                </p>
            </div>
        </div>
    </div>
    <section class="our-products-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-12 text-center d-flex align-items-center justify-content-center">
                    <div class="our-products">
                        <h2 class="secTitle ">Our Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 col-12 text-center">
                    <div class="service-slider owl-carousel mt-2">
                        <a><img src="{{ asset('frontend/assets/images/light-commercial.png')}}" alt="">Light Commercial Vehicle</a>
                        <a><img src="{{ asset('frontend/assets/images/heavy-commercial.png')}}" alt="">Heavy Commecial Vehicle</a>
                        <a><img src="{{ asset('frontend/assets/images/car.png')}}" alt="">4 Wheeler Passanger Commercial</a>
                        <a><img src="{{ asset('frontend/assets/images/small-commercial.png')}}" alt="">Small Commercial Vehicle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-local_1"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Integrity</h3>
                            <p>We adhere to the highest ethical standard; employing fairness, probity and mutual
                                respect in all we do.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-local_3"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Transparency &amp; Accountability</h3>
                            <p>We give our clients complete and accurate information and educate them about the
                                terms of financial services offered by us in a manner that is understandable by
                                them.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-XjxC7N01"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Professionalism</h3>
                            <p>We exercise high levels of professionalism in our work and reward merit. We use the
                                most appropriate skills and competencies, continually seeking opportunities to
                                improve through innovative approaches.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-local_11"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Teamwork</h3>
                            <p>We collaborate with all our stakeholders by effectively interacting and proactively
                                building effective and value adding relationships to achieve our shared goals.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-local_11"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Customer Services</h3>
                            <p>We actively seek to understand our customers’ circumstances, problems, expectations
                                and needs with the aim of delighting and surpassing their expectations in our
                                service delivery.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box_05">
                            <div class="ib_box">
                                <div class="pin1"></div><i class="icon-local_11"></i>
                                <div class="pin2"></div>
                            </div>
                            <h3>Vision</h3>
                            <p>Aris Capital wants to be a financial partner to the millions of unbanked Indians who
                                help drive our economy everyday. Whether it is truck drivers, owners or first time
                                entrepreneurs, Aris believes in developing long-term relationships with its
                                customers and wishes to support their financial growth over the years.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 text-center">
                <hr style="border-color:#000000; margin: 30px 0;">
                <div class="our-journey pt-2">
                    <h2 class="secTitle violet">Our Journey</h2>
                    <p class="secDesc2">
                        Aris Capital was incorporated on 22 February, 1995 as a Non Banking Finance Company
                        regulated by the Reserve Bank of India with the objective of providing short and medium term
                        loans and advances to small and medium businesses. Since then Aris has evolved into a
                        leading asset finance company becoming a significant player in used commercial vehicle and
                        car financing.
                    </p>
                    <p class="secDesc2">To further expand it’s business in Western India, Aris Capital acquired the
                        entire business and loan portfolio of Indore headquartered, publicly listed Ad Manum Finance
                        Limited in 2018, along with its network of 30 branches in Gujarat, Maharashtra and Madhya
                        Pradesh. Ad Manum Finance was incorporated in 1986 in Indore and over the years grew to
                        become a leading and well-known loan/hire purchase company in Western India.</p>

                    <p class="secDesc2">Aris Capital services a customer base of over 10,000 car, truck, bus and
                        tractor owners. It is dedicated to becoming the best asset finance company in India though a
                        focus on Speed, Energy, Flexibility and adherence to ‘Bhadralok’ (gentlemanly) values.</p>
                </div>

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4">
                <div class="fact_01 text-center">
                    <h2><span class="counter" data-count="15">15</span><i>+</i></h2>
                    <p>Year Of Experience</p>
                </div>
            </div>

            <div class="col-4">
                <div class="fact_01 text-center">
                    <h2><span class="counter" data-count="10">10</span><i>K</i></h2>
                    <p>Happy Customers</p>
                </div>
            </div>

            <div class="col-4">
                <div class="fact_01 text-center">
                    <h2><span class="counter" data-count="30">30</span><i>+</i></h2>
                    <p>Total Branches</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Start -->



<!-- Client Logo Start -->
<section class="clientLogo01">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12 text-center d-flex align-items-center justify-content-center">
                <h2 class="secTitle">Current and Past Banks<br>and Financial Institutions</h2>
            </div>
            <div class="col-xl-8 col-md-8 col-12 text-center">
                <div class="client-slider owl-carousel">
                    <a href=""><img src="{{ asset('frontend/assets/images/client-logo/Northern-Arc-Finance-ltd.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('frontend/assets/images/client-logo/Bandhan_Bank.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('frontend/assets/images/client-logo/HDFC-Bank.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('frontend/assets/images/client-logo/Hinduja-ashok-leyland.png')}}" alt=""></a>
                    <a href=""><img src="{{ asset('frontend/assets/images/client-logo/IDFC.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Logo End -->

<section class="insurance-partner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2 class="secTitle">Insurance Partner</h2>
                <div class="icici-insurance">
                    <img src="{{ asset('frontend/assets/images/ICICI-Web-Banner.gif')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Career Start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 padding-0 text-center">
                <div class="career-section">
                    <h2 class="secTitle white">Shape the Future with Us – <span>Join Today!</span></h2>
                    <p class="secDesc white">Your Future Awaits – Send Us Your CV!</p>
                    <div class="clearfix"></div>
                    <a href="mailto:hr@ariscapital.in">
                        <h3 class="cust_btn">hr@ariscapital.in</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Career End -->


<!-- Location Start -->
<section class="appoinmentSection01">
    <div class="container" id="locations">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2 class="secTitle">We Are Located In</h2>
                <p class="secDesc violet">
                    30+ Branches in India
                </p>

                <div id="map"></div>
            </div>

            @foreach ($groupedLocations as $state => $locations)
            <div class="col-xl-6">
                <div class="state-branch-box">
                    <h4 class="violet">{{ $state }}</h4>
                    <div class="row">
                        @foreach ($locations->chunk(ceil($locations->count() / 2)) as $chunk)
                        <div class="col-md-6 col-6">
                            <div class="state-branch">
                                <ul>
                                    @foreach ($chunk as $location)
                                    <li><i class="bi bi-geo-alt"></i> {{ $location->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach





        </div>
    </div>
</section>
<!-- Location End -->



<!-- Important Info Start -->
<section class="serviceSection01" id="imp-info">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="secTitle">Important Information</h2>
                <div class="boxService">
                    <div class="imp-info-list">
                        <ul>

                            @foreach($importants_data as $important)
                            @php
                            // Decode the JSON data in the 'info' field
                            $info = json_decode($important->info);
                            @endphp
                            <li>
                                <a href="{{ asset('images/important_pdfs/' . $info->pdf) }}" download>
                                    <i class="bi bi-chevron-double-right"></i> {{ $info->title }}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Important Info End -->



<!-- Staff Start -->
<section class="processSection01" id="teams">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- <div class="board-img"></div> -->
                <div class="teams-text">
                    <h2 class="secTitle mb-2">Board of Directors</h2>
                    <p>"ARIS Capital’s Board of Directors is dedicated to driving strategic growth and fostering
                        innovation in every aspect of our business. Their expertise and leadership guide the company
                        toward continued success and market leadership."</p>

                    <a href="{{url('our-board-of-directors')}}" class="qu_btn">Meet Our Directors</a>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <div class="teams-img"></div> -->
                <div class="teams-text">
                    <h2 class="secTitle mb-2">Our Team</h2>
                    <p>Led by a professional management team consisting of a young, innovative Sales and Structuring
                        Department supplemented by a mature, seasoned Credit Department ensuring prudent
                        administration of time-tested lending & risk policies.</p>

                    <a href="{{url('our-team')}}" type="submit" class="qu_btn">Meet Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Staff End -->



<!-- Media & News End -->
<section class="media-section" id="media">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <h3 class="secTitle mb-4">Media & News</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="news-media">
                    <div class="owl-carousel owl-theme">
                        @foreach($media_data as $media)
                        @php
                        // Decode the JSON data in the 'info' field
                        $info = json_decode($media->info);
                        @endphp
                        <div class="item">
                            <img src="{{ asset('images/media/' . $info->image) }}" alt="Media Image">
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Media & News End -->


<section class="coniconboxPage" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="contact-us">

                    <div class="contact-box">
                        <h3><i class="bi bi-telephone-fill"></i> Call Us For Help:</h3>
                        <hr>
                        <p><a href="tel:+91 33 4050 8300"><i class="bi bi-headphones"></i> +91 33 4050 8300</a></p>
                        <p><a href="tel:+91 9073907115"><i class="bi bi-telephone-fill"></i> +91 9073907115</a></p>
                        <p><a href="mailto:finance@ariscapital.in"><i class="bi bi-envelope-at-fill"></i>
                                finance@ariscapital.in</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-us">
                    <div class="contact-box">
                        <h3><i class="bi bi-briefcase-fill"></i> Corporate Office:</h3>
                        <hr>
                        <p><a href="#">PS Srijan Corporate Park, Tower 1, Unit 703<br> Block GP,Sec 5,Salt lake<br>
                                Kolkata 700091,India</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-us">
                    <div class="contact-box">
                        <h3><i class="bi bi-briefcase-fill"></i> Registered Office:</h3>
                        <hr>
                        <p><a href="#">60 C, Coolootola Street,<br>Kolkata -700073 India</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="support">
                    <div class="spIcon">
                        <i class="twi-phone"></i>
                        <img src="{{ asset('frontend/assets/images/1.jpg')}}" alt="">
                    </div>
                    <p><span>Existing Customers:</span> To request a copy of our fair practices code or to escalate
                        any grievance, please contact our
                        grievance officer</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon_box_04 existing-contact">
                    <div class="ib_box"><i class="twi-comments-alt-dollar"></i></div>
                    <p>Have any Questions?</p>

                    <h5><i class="bi bi-telephone-fill"></i> +91 33 4050 8300</h5>
                    <h5><i class="bi bi-envelope-at-fill"></i> cs@ariscapital.in</h5>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
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
            zoom: 5,
        });

        // Get data from the backend (grouped by state)
        const groupedLocations = @json($groupedLocations);

        // Iterate through each state and its locations
        Object.keys(groupedLocations).forEach(stateName => {
            const stateLocations = groupedLocations[stateName];

            stateLocations.forEach(location => {
                // Parse the JSON info field for the location
                const locationInfo = JSON.parse(location.info);

                // Check if latitude and longitude are provided
                if (locationInfo.latitude && locationInfo.longitude) {
                    // Add marker if coordinates are already available
                    addMarker(
                        parseFloat(locationInfo.latitude),
                        parseFloat(locationInfo.longitude),
                        locationInfo.name,
                        locationInfo.address
                    );
                } else {
                    // Fetch latitude and longitude using the Geocoding API
                    fetch(`https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(locationInfo.address)}&key=AIzaSyCPk5oNPOBry4jdtZ56O5v5CDMdhUg6Zs4`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === "OK" && data.results[0]) {
                                const coords = data.results[0].geometry.location;

                                // Add marker
                                addMarker(
                                    coords.lat,
                                    coords.lng,
                                    locationInfo.name,
                                    locationInfo.address
                                );
                            } else {
                                console.error("Geocoding failed for address:", locationInfo.address);
                            }
                        })
                        .catch(error => console.error("Error with Geocoding API:", error));
                }
            });
        });

        // Function to add a marker to the map
        function addMarker(lat, lng, name, address) {
            const marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map,
                title: name,
            });

            const infoWindow = new google.maps.InfoWindow({
                content: `<h4>${name}</h4><p>${address}</p>`,
            });

            marker.addListener("click", () => {
                infoWindow.open(map, marker);
            });
        }
    }

    // Initialize the map
    window.onload = initMap;
</script>



@endsection
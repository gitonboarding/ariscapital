@extends('frontend.layouts.layout')
@section('contents')


<!-- Start Slider Area  -->
<div class="slider-area slider-bg-image slider-style-5 bg-overlay-solid height-850 bg_image bg_image--13" data-black-overlay="3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-start">
                    <h4 class="subtitle">ARIS Capital</h4>
                    <h1 class="title display-one">India's leading commercial<br>vehicle finance company</h1>
                    <div class="button-group mt--40 mt_sm--20"><a class="btn-default" target="_blank" href="#">Our Services</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area  -->

<!-- Start Call To Action  -->
<div class="rainbow-callto-action clltoaction-style-default style-6" data-sal="slide-up" data-sal-duration="700">
    <div class="container">
        <div class="row row--0 align-items-center content-wrapper">
            <div class="col-lg-8 col-12">
                <div class="inner">
                    <div class="content text-start">
                        <h2 class="title">Ready to start creating a standard website?</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="call-to-btn text-start text-lg-end mt_md--20 mt_sm--20"><a class="btn-default" href="#">Purchase Doob</a></div>
            </div>
        </div>
    </div>
</div>
<!-- End Call To Action  -->
<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->



<!-- Start Service-2 Area  -->
<div class="rainbow-service-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle ">
                        <span class="theme-gradient">What we can do for you</span>
                    </h4>
                    <h2 class="title w-600 mb--20">Services provide for you.</h2>
                    <p class="description b1">There are many variations of passages of Lorem Ipsum
                        available, <br>but the majority have suffered alteration.</p>
                </div>
            </div>
        </div>

        <div class="row service-wrapper">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/truck.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Heavy Commercial<br>Vehicle Loan</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Gross Vehicle Weight: 15 MT+</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/delivery-truck.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Light Commercial<br>Vehicle Loan</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Gross Vehicle Weight: 4-15 MT</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/pickup-truck.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Small Commercial<br>Vehicle Loan</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Gross Vehicle Weight: 4 MT</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row service-wrapper">


            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/tractor.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Tractor Loan</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Gross Vehicle Weight: 4MT ( 38 to 55 HP )</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/sedan.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">4 Wheeler Passenger Commercial<br>Vehicle Loan</a>
                        </h4>
                        <p class="description b1 color-gray mb--0"></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/rikshaw.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">3 Wheeler Passenger Commercial<br>Vehicle Loan</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row service-wrapper">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/bus.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">School Bus<br>Loan</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="service service__style--1 bg-color-blackest radius mt--20 rbt-border text-start">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/images/services/car-loan.png')}}" style="width: 30%;">
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Top Up Loans<br>(Including Insurance Loans)</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                <div class="call-to-btn text-left mt_sm--20 text-lg-right">
                    <a class="btn-default" href="https://themeforest.net/checkout/from_item/34133466?license=regular">Purchase Doob
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Service-2 Area  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start About Area  -->
<div class="rainbow-about-area rainbow-section-gap">
    <div class="container">
        <div class="row row--30 align-items-center">
            <div class="col-lg-5">
                <div class="thumbnail" data-sal="slide-right" data-sal-duration="700">
                    <img class="w-100" src="{{ asset('frontend/assets/images/about/about-1.png')}}" alt="About Images">
                </div>
            </div>
            <div class="col-lg-7 mt_md--40 mt_sm--40">
                <div class="content" data-sal="slide-left" data-sal-duration="700">
                    <div class="section-title">
                        <h4 class="subtitle"><span class="theme-gradient">Aris Capital Private Limited</span></h4>
                        <h2 class="title mt--10">About Our Business.</h2>

                        <p>We are a leading Non Banking Financial Company registered with the Reserve Bank of India.</p>
                        <p>Since 1995, we have been successfully lending our proprietary capital to the most credit starved sections of India – Small and Medium Enterprises, First Time Entrepreneurs, Truck Drivers, Small Fleet Owners, Farmers and Low Income Families.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="count-box counter-style-4 text-start">
                                    <div>
                                        <div class="count-number"><span class="counter">10,000</span></div>
                                    </div>
                                    <h5 class="counter-title">Satisfied Customers</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="count-box counter-style-4 text-start">
                                    <div>
                                        <div class="count-number"><span class="counter">30</span></div>
                                    </div>
                                    <h5 class="counter-title">Branches</h5>
                                </div>
                            </div>
                        </div>
                        {{--<ul class="list-icon">
                            <li><span class="icon">
                                    <i class="feather-check"></i>
                                </span> 30+ Branches In East India & West India
                            </li>
                            <li><span class="icon">
                                    <i class="feather-check"></i>
                                </span> More than 10,000 Satisfied Customers</li>
                        </ul>--}}

                        <div class="read-more-btn mt--40">
                            <a class="btn-default btn-icon" target="_blank" href="#">More About Us <i class="icon feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Split Area  -->
<div class="rainbow-split-area">
    <div class="wrapper">
        <div class="rainbow-splite-style bg-color-blackest">
            <div class="split-wrapper">
                <div class="row g-0 radius-10 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="thumbnail"><img src="{{ asset('frontend/assets/images/split/split-03.jpg')}}" alt="split Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="split-inner">
                            <h4 class="title">Important Information</h4>
                            <div class="row">
                                <ul class="list-icon">
                                    <li><span class="icon">
                                            <i class="feather-check"></i>
                                        </span> GRIEVANCE REDRESSAL OFFICER | Mr. Karan Kotak | Email id: Finance@ariscapital.in
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                    <li><span class="icon">
                                            <i class="feather-check"></i>
                                        </span> GRIEVANCE REDRESSAL OFFICER | Mr. Karan Kotak | Email id: Finance@ariscapital.in
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="feather-check"></i>
                                        </span> CUSTOMER GRIEVANCE REDRESSAL POLICY | January 2019 <a href="" class="pdf-download"> <img src="{{ asset('frontend/assets/images/icons/pdf.png')}}" alt=""></a>
                                    </li>
                                </ul>
                                <div class="read-more-btn mt--40">
                                    <a class="btn-default btn-icon" target="_blank" href="#">More Info <i class="icon feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Split Area  -->

<div class="rbt-feature-area rainbow-section-gap">
    <div class="container">
        <!-- Start Feature Service  -->
        <div class="row g-5">
            <!-- Start Single Service  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 sal-animate">
                <div class="service service__style--1 text-left service-bg-transparent">
                    <div class="icon">
                        <i class="feather-percent theme-gradient"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Loan Calculator</a></h4>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Calculate</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service  -->
            <!-- Start Single Service  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 sal-animate">
                <div class="service service__style--1 text-left service-bg-transparent">
                    <div class="icon">
                        <i class="feather-map theme-gradient"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Branch Locations</a></h4>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Locations</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service  -->
            <!-- Start Single Service  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 sal-animate">
                <div class="service service__style--1 text-left service-bg-transparent">
                    <div class="icon">
                        <i class="feather-file-text theme-gradient"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Important Information</a></h4>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service  -->
            <!-- Start Single Service  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 sal-animate">
                <div class="service service__style--1 text-left service-bg-transparent">
                    <div class="icon">
                        <i class="feather-file-plus theme-gradient"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600"><a href="#">Apply For Loan</a></h4>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service  -->
        </div>
        <!-- End Feature Service  -->
    </div>
</div>

<!-- Start Style Two  -->
<div class="collaborate-card-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-left sal-animate">
                    <h3 class="title mb--20">Say Hi, Aris Capital or just 👋🏾</h3>
                </div>
            </div>
        </div>
        <div class="row row--10">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--20">
                <div class="service service__style--1 variation-2 variation-3 bg-lessdark-gradient radius text-left h-100">
                    <div class="content">
                        <h6 class="subtitle"><span class="theme-gradient">Aris Capital</span></h6>
                        <h4 class="title w-600">
                            <a href="#">Board of Directors</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Our Board Of Industry Veterans Provide Mentorship To The Management Team.
                        </p>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Meet Our Directors</a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-8 col-md-6 col-sm-12 col-12 mt--20">
                <div class="service service__style--1 variation-2 variation-3 radius text-left h-100 bg_image bg_image--2">
                    <div class="content">

                    </div>

                </div>
            </div>

            <div class="col-lg-7 col-md-6 col-sm-12 col-12 mt--20">
                <div class="service service__style--1 variation-2 variation-3 radius text-left h-100 bg_image bg_image--2">
                    <div class="content">

                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 col-12 mt--20">
                <div class="service service__style--1 variation-2 variation-3 bg-lessdark-gradient radius text-left h-100">
                    <div class="content">
                        <h6 class="subtitle"><span class="theme-gradient">Aris Capital</span></h6>
                        <h4 class="title w-600">
                            <a href="#">Our Team</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Led by a professional management team consisting of a young, innovative Sales and Structuring Department supplemented by a mature, seasoned Credit Department ensuring prudent administration of time-tested lending & risk policies.
                        </p>
                        <div class="read-more-btn mt--30">
                            <a class="btn-default btn-icon" target="_blank" href="#">Meet Us</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Testimonial Style Two  -->

<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Blog Area  -->
<div class="blog-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Blogs</span></h4>
                    <h2 class="title w-600 mb--20">Recent Insights & News.</h2>
                    <p class="description b1">Your source for inspiring stories, insights and <br>current news updates.</p>
                </div>
            </div>
        </div>
        <div class="row row--15">

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail"><a class="image" href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/blog-01.jpg')}}" alt="Blog Image"></a></div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">Irin Pervin</a></li>
                                <li class="separator">/</li>
                                <li>10 Dec 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Best Corporate Tips You Will Read This
                                    Year.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail"><a class="image" href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/blog-02.jpg')}}" alt="Blog Image"></a></div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">Fatima Asrafy</a></li>
                                <li class="separator">/</li>
                                <li>30 Nov 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Should Fixing Corporate Take 100
                                    Steps.</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                <div class="rainbow-card box-card-style-default">
                    <div class="inner">
                        <div class="thumbnail">
                            <a class="image" href="blog-details.html"><img src="{{ asset('frontend/assets/images/blog/blog-03.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="rainbow-meta-list">
                                <li><a href="#">John Dou</a></li>
                                <li class="separator">/</li>
                                <li>12 Oct 2021</li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">The Next 100 Things To Immed Iately Do
                                    About.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area  -->




@endsection
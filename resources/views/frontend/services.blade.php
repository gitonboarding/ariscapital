@extends('frontend.layouts.layout')
@section('contents')

<!-- Start Slider Area  -->
<div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--12" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner pt--80 text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                    <div>
                        <h3 class="rainbow-sub-badge"><span class="theme-gradient">Services</span></h3>
                    </div>
                    <h1 class="title display-one">We are a Corporate <br> Business Agency.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area  -->


<!-- Start Service Area  -->
<div class="service-area rainbow-section-gapTop rainbow-section-gapBottom">
    <div class="container clltoaction-style-default style-5">
        <div class="row row--40 align-items-center">
            <div class="col-lg-6 mt_md--40 mt_sm--40">
                <p class="mb--10"><b>At ARIS Capital,</b> we know that there’s a lot more to finance than just money. We realize that our customers’ dreams are the bigger picture, and we take every measure to treat it as such.</p>
                <p class="mb--10">To this end, we make it a point to sit with each and every customer looking for a loan, and understand their ambitions before recommending specific plans to that suits their needs the best. To make the experience as seamless as possible, we keep our loan process absolutely simple and transparent so that our customers can be assured of a totally hassle-free experience!</p>
            </div>

            <div class="col-lg-6 mt_md--40 mt_sm--40 content-wrapper theme-shape">
                <div class="content sal-animate" data-sal="slide-left" data-sal-duration="700">
                    <div class="section-title">
                        <h2 class="title mt--10">ARIS STRENGTHS</h2>

                        <ul class="list-icon">
                            <li><span class="icon"><i class="feather-check"></i></span> Track your teams progress with mobile app.</li>
                            <li><span class="icon">
                                    <i class="feather-check"></i>
                                </span> Unique Understanding of transport industry.
                            </li>
                            <li><span class="icon">
                                    <i class="feather-check"></i>
                                </span> Experience of almost 50 years through ATO india limited.
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="feather-check"></i>
                                </span> Doorstep customer service.
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="feather-check"></i>
                                </span> Fast processing of loans.
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="feather-check"></i>
                                </span> Support borrowers during bad times.
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="feather-check"></i>
                                </span> Wide range of pricing with our products and services.
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="feather-check"></i>
                                </span> We continuously learn to improve upon the services.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service Area  -->


<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>

<!-- Start Service-2 Area  -->
<div class="rainbow-service-area rainbow-section-gapTop rainbow-section-gapBottom">
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
            <div class="offset-2 col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
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

        </div>
    </div>
</div>
<!-- End Service-2 Area  -->


<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>


<div class="rainbow-split-area rainbow-section-gap">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12 mb--40">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                    <h2 class="title w-600 mb--20">HOW WE DO IT?</h2>
                </div>
            </div>
        </div>
        <div class="rainbow-splite-style">
            <div class="split-wrapper">
                <div class="row g-0 radius-10 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="thumbnail image-left-content">
                            <img src="{{ asset('frontend/assets/images/split/split-03.jpg')}}" alt="split Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="split-inner">
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">We’re locals. All of our staff is from the location in which they are working. We know the terrain and the culture. </p>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">We’re local. We are there, on the ground, forming partnerships, enlisting experts and building infrastructure to support new businesses and fuel the economy of the community.</p>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">We work with a broad network of local and international experts on various aspects of financing. </p>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">The commercial vehicle market is driven by the aspirations of driver turned owners, first time users and first time buyers and small road transporters. Typical end clients come from low income households who have limited access to formal sources of financing and whose livelihood is directly dependent on the vehicle.</p>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">In the vehicle segment, we have developed in-house valuation matrices for valuation of different model-makes of vehicles. This is also supported by independent vehicle valuation. While the cash-flow analysis is limited as most of the vehicles in the segment operate on market load and do not have formal employment contracts, the repayment capacity is based on our understanding of the vehicle and it’s earning capacity in the market it operates in.</p>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Most of the delay in the vehicle finance segment is situational in nature and does not lead into ultimate default. We have thus developed relationship focused collection models with an objective to remain in constant touch with the borrower and keep abreast with the related issues and devise the collection strategy accordingly.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
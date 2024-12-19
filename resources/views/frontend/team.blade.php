@extends('frontend.layouts.layout')
@section('contents')


<!-- Begin:: Slider Section -->
<section class="page_banner" style="background-image: url('{{ asset('frontend/assets/images/bg/banner.jpg') }}');">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title">Our Team</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="{{url('/')}}" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Our Team</p>
            </div>
        </div>
    </div>
</section>
<!-- End:: Slider Section -->

<!-- Team Start -->
<section class="mediaSection01">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="subHeading">
                    <div class="subTitle"><span class="bleft"></span>Our Memebers<span class="bright"></span></div>
                    <h2 class="secTitle">Team</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="team_02">
                            <div class="other-staff" data-toggle="modal" data-target="#myModal1">
                                <div class="tm_thumb">
                                    <img src="assets/images/team/sanhita_das.jpg" alt="">
                                </div>
                                <div class="tm_desc">
                                    <h3>Sanhita Das</h3>
                                    <h5>Finance & Accounts</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="team-name">
                                            <h3>Sanhita Das</h3>
                                            <h5>Finance & Accounts</h5>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Sanhita Das leads the finance and accounts for Aris Capital.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="team_02">
                            <div class="other-staff" data-toggle="modal" data-target="#myModal2">
                                <div class="tm_thumb">
                                    <img src="assets/images/team/sidhhartha.jpg" alt="">
                                </div>
                                <div class="tm_desc">
                                    <h3>Siddhartha Guhathakurta</h3>
                                    <h5>Human Resource</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="team-name">
                                            <h3>Siddhartha Guhathakurta</h3>
                                            <h5>Human Resource</h5>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mr. Siddhartha Guhathakurta heads the Human Resource and Admin functions for our HO and all branch locations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="team_02">
                            <div class="other-staff" data-toggle="modal" data-target="#myModal3">
                                <div class="tm_thumb">
                                    <img src="./assets/images/team/yogesh_shinde.jpg" alt="">
                                </div>
                                <div class="tm_desc">
                                    <h3>Yogesh Shinde</h3>
                                    <h5>Sr. Credit Manager (West)</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="team-name">
                                            <h3>Yogesh Shinde</h3>
                                            <h5>Sr. Credit Manager (West)</h5>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yogesh Baburao Shinde leads the Credit department of Aris Capital(West).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team End -->
@endsection
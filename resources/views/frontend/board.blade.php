@extends('frontend.layouts.layout')
@section('contents')

<!-- Begin:: Slider Section -->
<section class="page_banner" style="background-image: url('{{ asset('frontend/assets/images/bg/banner.jpg') }}');">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title">Board of Directors</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="{{url('/')}}" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Board of Directors</p>
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
                    <h2 class="secTitle">Board</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($data as $member)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="team_02">
                            <div class="other-staff" data-toggle="modal" data-target="#modal{{ $member->id }}">
                                <div class="tm_thumb">
                                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                                </div>
                                <div class="tm_desc">
                                    <h3>{{ $member->name }}</h3>
                                    <h5>{{ $member->position }}</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitle{{ $member->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="team-name">
                                            <h3>{{ $member->name }}</h3>
                                            <h5>{{ $member->position }}</h5>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $member->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>

        </div>
    </div>
</section>
<!-- Team End -->


@endsection
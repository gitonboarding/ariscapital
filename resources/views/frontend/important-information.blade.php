@extends('frontend.layouts.layout')
@section('contents')


<!-- Begin:: Slider Section -->
<section class="page_banner" style="background-image: url('{{ asset('frontend/assets/images/bg/banner.jpg') }}');">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title">Important Information</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="{{url('/')}}" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Important Information</p>
            </div>
        </div>
    </div>
</section>
<!-- End:: Slider Section -->

<!-- Services Start -->
<section class="mediaSection01" id="imp-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="subHeading">
                    <div class="subTitle"><span class="bleft"></span>Latest News<span class="bright"></span></div>
                    <h2 class="secTitle">Important Information</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="boxService">
                    <div class="imp-info-list important-list">
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
<!-- Services End -->

@endsection
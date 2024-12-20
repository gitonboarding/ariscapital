@extends('frontend.layouts.layout')
@section('contents')

<section class="page_banner" style="background-image: url('{{ asset('frontend/assets/images/bg/banner.jpg') }}');">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title">Media</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="{{url('/')}}" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Media</p>
            </div>
        </div>
    </div>
</section>
<!-- End:: Slider Section -->


<section class="mediaSection01">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="subHeading">
                    <div class="subTitle"><span class="bleft"></span>Media<span class="bright"></span></div>
                    <h2 class="secTitle">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($media_data as $media)
            @php
            // Decode the JSON data to get the image file name
            $info = json_decode($media->info);
            @endphp
            <div class="col-xl-6">
                <div class="widget gallery">
                    <div class="galleryShots1">
                        <div class="gallery-column">
                            <a class="popup_img" href="{{ asset('images/media/' . $info->image) }}">
                                <img src="{{ asset('images/media/' . $info->image) }}" alt="Media Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
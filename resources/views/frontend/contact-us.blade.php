@extends('frontend.layouts.layout')
@section('contents')
<section class="page_banner" style="background-image: url('{{ asset('frontend/assets/images/bg/banner.jpg') }}');">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title">Contact Us</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="index.html" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Contact Us</p>
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
                    <!-- <div class="subTitle"><span class="bleft"></span>Latest News<span class="bright"></span></div> -->
                    <h2 class="secTitle">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form class="contact-form-1 rainbow-dynamic-form" id="contact-form" method="POST" action="mail.php">
                    <div class="contact-form">
                        <div class="form-group">
                            <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                        </div>

                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Your Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="qu_btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="business-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2713987284446!2d88.43202737590268!3d22.568950533103024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02758c8cfff887%3A0xc7105a534d628380!2sPS%20Srijan%20Corporate%20Park!5e0!3m2!1sen!2sin!4v1733123564934!5m2!1sen!2sin" width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4">
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
                                <img src="assets/images/1.jpg" alt="">
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
        </div>
    </div>
</section>
<!-- Services End -->

@endsection
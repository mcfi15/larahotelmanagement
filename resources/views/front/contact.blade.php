@extends('layouts.front')

@section('title', 'Contact Us Page')

@section('content')

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('assets/front/img/hero_home_2.jpg') }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Contact Us</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between">
        <div class="col-xl-4 col-lg-5 order-lg-2">
            <div class="contact_info">
                <ul class="clearfix">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <h4>Address</h4>
                        <div>{{ $appSetting->address }} | {{ $appSetting->zipcode }}<br> - {{ $appSetting->country }}</div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-paper"></i>
                        <h4>Email address</h4>
                        <p><a href="mailto:{{ $appSetting->email }} ">{{ $appSetting->email }} </a> - <a href="mailto:{{ $appSetting->email2 }} ">{{ $appSetting->email2 }} </a></p>
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <h4>Telephone</h4>
                        <div>{{ $appSetting->phone }},  {{ $appSetting->phone2 }} <br><small>Monday to Friday 9am - 7pm</small></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 order-lg-1">
            <h3 class="mb-3">Get in Touch</h3>
            <div id="message-contact"></div>
            <form method="post" action="https://www.ansonika.com/paradise/phpmailer/contact_template_email.php" id="contactform" autocomplete="off">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name">
                            <label for="name_contact">Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email">
                            <label for="email_contact">Email</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Subject">
                            <label for="phone_contact">Subject</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                    <label for="message_contact">Message</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">
                            <label for="verify_contact">Are you human? 3 + 1 =</label>
                        </div>
                    </div>
                </div>
                <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline" id="submit-contact"></p>
            </form>
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->

<div class="map_contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--/map_contact -->


@endsection
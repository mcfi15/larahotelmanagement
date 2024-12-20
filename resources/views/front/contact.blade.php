@extends('layouts.front')

@section('title', 'Contact Us Page')

@section('content')

@include('layouts.alert.msgFront')

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('uploads/photos/bar1.jpg') }}" alt="">
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
            <form action="{{ url('/post-message') }}" method="post">
                @csrf
                <div class="row">

                    @guest

                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                            <label for="name">Name</label>
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                            <label for="email">Email</label>
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                    @else
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name" value="{{ Auth::user()->first_name.' '.Auth::user()->last_name }}" readonly>
                            <label for="name">Name</label>
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" readonly>
                            <label for="email">Email</label>
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                    @endguest
                </div>
                <!-- /row -->
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject">
                            <label for="subject">Subject</label>
                        </div>
                        @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                </div>
                <!-- /row -->
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                    <label for="message">Message</label>
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>  
                    @enderror
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">
                        {!! htmlFormSnippet() !!}
                        @if ($errors->has('g-recaptcha-response'))

                            <div>
                                <span class="text-danger">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            </div>
                        @endif
                    </div>
                </div> --}}
                <p class="mt-3"><button type="submit" class="btn_1 outline">Submit</button></p>
            </form>
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->

<div class="map_contact">
    <iframe id="map-canvas" class="map_part" width="600"  height="450"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=RAINBOW 2, IMORE ROAD OPPOSITE NEW TRANSFORMER, IBASA SATELLITE TOWN, LAGOS, NIGERIA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
</div>
<!--/map_contact -->


@endsection
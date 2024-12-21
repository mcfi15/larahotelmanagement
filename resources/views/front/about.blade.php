@extends('layouts.front')

@section('title', 'About Us Page')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

<div class="hero small-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('uploads/photos/bar.jpg') }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">About {{ $appSetting->website_name }}</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-5">
            <div class="parallax_wrapper inverted">
                <img src="{{ asset('uploads/photos/walk.jpg') }}" alt="" class="img-fluid rounded-img">
                    <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="{{ asset('uploads/photos/wallk2.png') }}" alt="" class="rounded-img"></span></div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="intro">
                <div class="title">
                    <small>{{ $appSetting->website_name }}</small>
                </div>
                <p class="lead">Welcome to the Western Isle Hotel, your home away from home in the heart of the beautiful western coast. Nestled in a picturesque location, our hotel offers breathtaking views, exceptional service, and a relaxing atmosphere, perfect for both leisure and business travelers.</p>
                <p>At the Western Isle Hotel, we are committed to making every guest’s stay memorable. Our team is dedicated to providing personalized service, ensuring comfort and convenience throughout your visit. Whether you're here to explore the local attractions, enjoy a peaceful retreat, or host a corporate event, we are here to make your experience exceptional.</p>
                <p>Our accommodation options include a variety of rooms designed to cater to your needs, featuring modern amenities and cozy furnishings. Guests can enjoy a range of on-site services, from delicious dining options to event spaces that offer flexibility for any occasion.</p>
                <p>Explore the natural beauty of the surrounding area, filled with scenic landscapes, outdoor activities, and vibrant culture, or simply unwind in our comfortable setting.</p>
                <p>Thank you for choosing Western Isle Hotel — we look forward to welcoming you!</p>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /container -->



@endsection
@extends('layouts.front')

@section('title', 'Home Page')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

@include('layouts.alert.msgFront')

<div class="hero home-search full-height jarallax" data-jarallax-video="mp4:{{ asset('uploads/videos/front.mp4') }}" data-speed="0.2">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h3 class="slide-animated two">A unique Experience<br>where to stay</h3>
            {{-- <div class="row justify-content-center slide-animated three">
                <div class="col-xl-10">
                    <div class="row g-0 booking_form">
                        <div class="col-lg-4 ">
                            <div class="form-group">
                                <input class="form-control" type="text" name="dates" id="" placeholder="Check in / Check out" >
                                <i class="bi bi-calendar2"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pe-lg-0 pe-sm-1">
                            <div class="qty-buttons">
                                <label>Adults</label>
                                <input type="button" value="+" class="qtyplus" name="adults">
                                <input type="text" name="adults" id="adults" value="" class="qty form-control">
                                <input type="button" value="-" class="qtyminus" name="adults">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 ps-lg-0 ps-sm-1">
                            <div class="qty-buttons">
                                <label>Childs</label>
                                <input type="button" value="+" class="qtyplus" name="childs">
                                <input type="text" name="childs" id="childs" value="" class="qty form-control">
                                <input type="button" value="-" class="qtyminus" name="childs">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_scrollto">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- /mouse_wp -->
    </div>
</div>

<div class="pattern_2">
    <div class="container margin_120_95" id="first_section">
        <div class="row justify-content-between flex-lg-row-reverse align-items-center">
            <div class="col-lg-5">
                <div class="parallax_wrapper">
                    <img src="{{ asset('uploads/photos/walk.jpg') }}" alt="" class="img-fluid rounded-img">
                    <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="{{ asset('uploads/photos/wallk2.png') }}" alt="" class="rounded-img"></span></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="intro">
                    <div class="title">
                        <small>About us</small>
                        <h2>Tailored services and the experience of unique holidays</h2>
                    </div>
                    <p class="lead">Welcome to the Western Isle Hotel, your home away from home in the heart of the beautiful western coast. Nestled in a picturesque location, our hotel offers breathtaking views, exceptional service, and a relaxing atmosphere, perfect for both leisure and business travelers.</p>
                    <p><em>Explore the natural beauty of the surrounding area, filled with scenic landscapes, outdoor activities, and vibrant culture, or simply unwind in our comfortable setting.</em></p>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <div class="pinned-image pinned-image--medium">
        <div class="pinned-image__container" id="section_video">
            <video loop="loop" muted="muted" id="video_home">
                <source src="{{ asset('uploads/videos/swimming_pool_2.mp4') }}" type="video/mp4">
                <source src="{{ asset('uploads/videos/swimming_pool_2.mp4') }}" type="video/webm">
                <source src="{{ asset('uploads/videos/swimming_pool_2.mp4') }}" type="video/ogg">
            </video>
            <div class="pinned-image__container-overlay"></div>
        </div>
        <div class="pinned_over_content">
            <div class="title white">
                <small data-cue="slideInUp" data-delay="200">Luxury Hotel Experience</small>
                <h2 data-cue="slideInUp" data-delay="300">Enjoy in a very<br> Immersive Relax</h2>
            </div>
        </div>
    </div>
    <!-- /pinned content -->
</div>

<div class="container margin_120_95">
    <div class="title mb-3">
        <small data-cue="slideInUp">Luxury experience</small>
        <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
    </div>
    <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">

        @forelse ($rooms as $room)

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <a href="{{ url('room-details/'.$room->slug) }}" class="box_cat_rooms">
                <figure>
                    <div class="background-image" data-background="url({{ asset($room->image) }})"></div>
                    <div class="info">
                        <small>From &#8358;{{ number_format($room->price) }}/night</small>
                        <h3>{{ $room->room_type }}</h3>
                        <span>Read more</span>
                    </div>
                </figure>
            </a>
        </div>
            
        @empty

        <span style="color:red;">No Data Available</span>
            
        @endforelse
        
        
        <p class="text-end"><a href="{{ url('rooms-and-suites') }}" class="btn_1 outline mt-2">View all Rooms</a></p>
    </div>
    <!-- /row-->

    <div class="title text-center mb-5">
        <small data-cue="slideInUp">{{ $appSetting->website_name }}</small>
        <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
    </div>
    <div class="row mt-4">
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <i class="customicon-air-condition"></i>
                <h3>Air Condition</h3>
                <p>At Western Isle Hotel, we prioritize your comfort. All of our rooms and public spaces are equipped with air conditioning, ensuring a cool and relaxing environment throughout your stay. </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-wifi"></i>
                <h3>High Speed Wifi</h3>
                <p>At Western Isle Hotel, we understand the importance of staying connected. That’s why we offer high-speed Wi-Fi throughout the hotel, available in all rooms and common areas. </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-breakfast"></i>
                <h3>Restaurant</h3>
                <p>At Western Isle Hotel, we are proud to offer an on-site restaurant serving delicious, freshly prepared meals. </p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="customicon-cocktail"></i>
                <h3>Bar</h3>
                <p>Unwind and relax at our bar at Western Isle Hotel, where you can enjoy a wide selection of drinks in a cozy and inviting atmosphere. </p>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>


<div class="marquee">
    <div class="track">
        <div class="content">&nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience</div>
    </div>
</div>

<div class="bg_white">
    <div class="container margin_120_95">
        <div class="row justify-content-between d-flex align-items-center add_bottom_90">
            <div class="col-lg-6">
                <div class="pinned-image rounded_container pinned-image--small mb-4">
                    <div class="pinned-image__container">
                        <img src="{{ asset('uploads/photos/restur.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="title">
                    <small>Local Amenities</small>
                    <h3>Restaurants</h3>
                    <p>At Western Isle Hotel, we are proud to offer an on-site restaurant serving delicious, freshly prepared meals. Whether you're starting your day with a hearty breakfast, enjoying a leisurely lunch, or indulging in a memorable dinner, our restaurant provides a warm and inviting atmosphere. Our menu features a variety of dishes made with locally sourced ingredients, catering to all tastes and preferences.</p>
                    <p><a href="{{ url('about') }}" class="btn_1 mt-1 outline">Read more</a></p>
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row justify-content-between d-flex align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="pinned-image rounded_container pinned-image--small mb-4">
                    <div class="pinned-image__container">
                        <img src="{{ asset('uploads/photos/soc.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-1">
                <div class="title">
                    <small>Local Amenities</small>
                    <h3>Art & Culture</h3>
                    <p>At Western Isle Hotel, we celebrate the rich art and culture of our local area. Our hotel features a collection of carefully curated artworks from regional artists, bringing the vibrant heritage and creativity of the community to life. Whether through stunning paintings, sculptures, or cultural exhibits, we aim to provide our guests with an immersive experience that reflects the spirit of the region. We also host regular cultural events, such as live music performances, art exhibitions, and local craft showcases, allowing our visitors to explore and appreciate the best of local talent and traditions.</p>
                    <p><a href="{{ url('about') }}" class="btn_1 mt-1 outline">Read more</a></p>
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /container-->
</div>

@guest

<div class="container margin_120_95" id="booking_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                   
                    <h2><a href="{{ url('login') }}">Login</a> To Book Our Rooms</h2>
                </div>
                
                
            </div>
        </div>
    </div>
</div>

@else

<div class="container margin_120_95" id="booking_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>{{ $appSetting->website_name }}</small>
                    <h2>Check Availability</h2>
                </div>
                
                <p class="phone_element no_borders"><a href="mailto:{{ $appSetting->email }}"><i class="bi bi-envelope"></i><span><em>Info and bookings</em>{{ $appSetting->email }}</span></a></p>
            </div>
        </div>
        <div class="col-xl-7">
            <div data-cue="slideInUp" data-delay="200">
                <div class="booking_wrapper">
                    
                    <form action="{{ url('/booking') }}" method="POST">
                        @csrf
                    <input type="hidden" name="customer_name" id="" value="{{ Auth::user()->first_name.' '.Auth::user()->last_name }}">
                    <input type="hidden" name="customer_email" id="" value="{{ Auth::user()->email }}">
                    <input type="hidden" name="customer_phone" id="" value="{{ Auth::user()->phone }}">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Check In</label>
                                <input class="form-control" type="date" name="checkin" id="" placeholder="Check In">
                            </div>
                            @error('checkin')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Check Out</label>
                                <input class="form-control" type="date" name="checkout" id="" placeholder="Check Out">
                                @error('checkout')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            </div>
                        </div>
                        <input type="hidden" name="slug" value="{{ $room->slug }}">
                        <div class="col-lg-6">
                            <div class="custom_select">
                                <select class="wide" name="room_type_id">
                                    <option>Select Room</option>
                                    @forelse ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room_type }}</option>
                                    @empty
                                    <option value="">No Room Available</option>
                                    @endforelse
                                </select>
                                @error('checkin')
                                    <small class="text-danger">{{ $message }}</small>  
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="qty-buttons mb-3 version_2">
                                        <input type="button" value="+" class="qtyplus" name="adults_booking">
                                        <input type="text" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                        <input type="button" value="-" class="qtyminus" name="adults_booking">
                                    </div>
                                    @error('adults_booking')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 qty-buttons mb-3 version_2">
                                        <input type="button" value="+" class="qtyplus" name="childs_booking">
                                        <input type="text" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
                                        <input type="button" value="-" class="qtyminus" name="childs_booking">
                                    </div>
                                    @error('childs_booking')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <!-- / row -->
                <p class="text-end mt-4"><button type="submit" class="btn_1 outline">Book Now</button></p>
            </form>
            </div>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>

@endguest

@endsection
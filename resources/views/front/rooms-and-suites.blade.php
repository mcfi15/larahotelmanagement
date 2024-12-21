@extends('layouts.front')

@section('title', 'Rooms and Suites Page')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)


@section('content')

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('uploads/photos/bar2.jpg') }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Our Rooms & Suites</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95 pb-0" id="first_section">

    @forelse ($rooms as $room)

    <div class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
            <div class="pinned-image__container">
                <img src="{{ asset($room->image) }}" alt="">
            </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <div class="box_item_info" data-jarallax-element="-30">
                    <small>From &#8358;{{ number_format($room->price) }}/night</small>
                    <h2>{{ $room->room_type }}</h2>
                    <p>{{ $room->description }}</p>
                    <div class="facilities clearfix">
                        <ul>
                            @if($room->bed == 1)
                            <li>
                                <i class="customicon-double-bed"></i> King Size Bed
                            </li>
                            @else
                            @endif
                            @if($room->wifi == 1)
                            <li>
                                <i class="customicon-wifi"></i> Free Wifi
                            </li>
                            @else
                            @endif
                            @if($room->tv == 1)
                            <li>
                                <i class="customicon-television"></i> TV
                            </li>
                            @else
                            @endif
                        </ul>
                    </div>
                    <div class="box_item_footer d-flex align-items-center justify-content-between">
                        <a href="{{ url('room-details/'.$room->slug) }}#booking_section" class="btn_4 learn-more">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Book Now</span>
                        </a>
                        <a href="{{ url('room-details/'.$room->slug) }}" class="animated_link">
                            <strong>Read more</strong>
                        </a>
                    </div>
                    <!-- /box_item_footer -->
                </div>
                <!-- /box_item_info -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
        
    @empty
        
    @endforelse

</div>
<!-- /container -->


@endsection
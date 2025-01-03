@extends('layouts.front')

@section('title', $room->room_type)

@section('meta_title', $room->room_type)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

<div class="hero full-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img kenburns" src="{{ asset($room->image) }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">{{ $room->room_type }}</h1>
                </div>
            </div>
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_explore">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- / mouse -->
    </div>
</div>
<!-- /Background Img Parallax -->
@include('layouts.alert.msgFront')
<div class="bg_white" id="first_section">
    <div class="container margin_120_95">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="title">
                    <small>Luxury Experience</small>
                    <h4>&#8358;{{ number_format($room->price) }} / Night</h4>
                </div>
                <p>{{$room->description}}</p>
            </div>
            <div class="col-lg-6">
                <div class="room_facilities_list">
                    <ul data-cues="slideInLeft">
                        @if($room->bed == 1)
                        <li><i class="icon-hotel-double_bed_2"></i> King Size Bed</li>
                        @else
                        @endif
                        @if($room->box == 1)
                        <li><i class="icon-hotel-safety_box"></i> Safety Box</li>
                        @else
                        @endif
                        @if($room->balcony == 1)
                        <li><i class="icon-hotel-patio"></i>Balcony</li>
                        @else
                        @endif
                        @if($room->tv == 1)
                        <li><i class="icon-hotel-tv"></i> TV</li>
                        @else
                        @endif
                        @if($room->pet == 1)
                        <li><i class="icon-hotel-dog"></i> Pet Allowed</li>
                        @else
                        @endif
                        @if($room->wifi == 1)
                        <li><i class="icon-hotel-wifi"></i> Wifi / Netflix access</li>
                        @else
                        @endif
                        @if($room->netflix == 1)
                        <li><i class="icon-hotel-netflix"></i> Air Dryer</li>
                        @else
                        @endif
                        @if($room->air_condition == 1)
                        <li><i class="icon-hotel-condition"></i> Air Condition</li>
                        @else
                        @endif
                        @if($room->loundry == 1)
                        <li><i class="icon-hotel-loundry"></i>Loundry Service</li>
                        @else
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_white -->

<div class="bg_white add_bottom_120">
    <div class="container-fluid p-lg-0">
        <div data-cues="zoomIn">
            <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                @forelse ($room->images as $image)
                <div class="item">
                    <img src="{{ asset("$image->room_images") }}" alt="" style="height:400px;">
                </div>
                @empty
                <span style="color: red;">No Image Found</span>
                @endforelse
                
            </div>
        </div>
        {{-- <div class="text-center mt-5">
            <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_5.jpg">FullScreen Gallery</a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_1.jpg"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_4.jpg"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_6.jpg"></a>
        </div> --}}
    </div>
</div>
<!-- /bg_white -->

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
            <form action="{{ url('room-details/book') }}" method="POST">
                @csrf
            <div data-cue="slideInUp" data-delay="200">
                <div class="booking_wrapper">
                    <div class="col-12">
                        <input type="hidden" name="room_type_id" value="{{ $room->id }}">
                    </div>
                    <div class="row">
                        <input type="hidden" name="customer_name" id="" value="{{ Auth::user()->first_name.' '.Auth::user()->last_name }}">
                        <input type="hidden" name="customer_email" id="" value="{{ Auth::user()->email }}">
                        <input type="hidden" name="customer_phone" id="" value="{{ Auth::user()->phone }}">
                        <input type="hidden" name="slug" value="{{ $room->slug }}">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Check In</label>
                                <input class="form-control" type="date" name="checkin" id="" placeholder="Check In">
                            </div>
                            @error('checkin')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="">Check Out</label>
                                <input class="form-control" type="date" name="checkout" id="" placeholder="Check Out">
                                @error('checkout')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Adults</label>
                                    <div class="qty-buttons mb-3 version_2">
                                        <input type="button" value="+" class="qtyplus" name="adults_booking">
                                        <input type="number" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                        <input type="button" value="-" class="qtyminus" name="adults_booking">
                                    </div>
                                    @error('adults_booking')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">Childs</label>
                                    <div class="mb-3 qty-buttons mb-3 version_2">
                                        <input type="button" value="+" class="qtyplus" name="childs_booking">
                                        <input type="number" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
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
                <p class="text-end mt-5"><button type="submit" class="btn_1 outline">Book Now</buttom></p>
            </div>
            </form>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->

@endguest

@endsection
@extends('layouts.front')

@section('title', $facility->name)

@section('content')

<div class="hero full-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img kenburns" src="{{ asset($facility->image) }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">\
                    <h1 class="slide-animated two">{{ $facility->name }}</h1>
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
                    
                </div>
                <p>{{$facility->details}}</p>
            </div>
            
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>





@endsection
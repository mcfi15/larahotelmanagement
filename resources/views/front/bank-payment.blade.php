@extends('layouts.front')

@section('title', 'Bank Details')

@section('meta_title', $appSetting->meta_title)

@section('meta_description', $appSetting->meta_description)

@section('meta_keywords', $appSetting->meta_keywords)

@section('content')

@guest
<script>window.location = "/";</script>
@else

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="{{ asset('assets/front/img/hero_home_2.jpg') }}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Payment Confirmation</h1>
        </div>
    </div>
</div>

<div class="pattern_3">
    <div class="container margin_120_95" id="first_section">
        <div class="title text-center mb-5">
              <h2 data-cue="slideInUp" data-delay="100">Payment Confirmation</h2>
        </div>
      <div class="tabs_menu" data-cue="slideInUp" data-delay="200">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="" class="nav-link active" data-bs-toggle="tab" role="tab">Bank Details</a>
                </li>
                
            </ul>
            <div class="tab-content add_bottom_25" role="tablist">
                <div id="" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5>
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                Bank Details
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="banner background-image" data-background="url(img/restaurant/banner_bg_2.jpg)">
                                <div class="wrapper d-flex align-items-center justify-content-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                                    <div class="">
                                        <h4>This option is not yet available</h4>
                                       {{-- <small>Your booking has been placed successfully.</small>
                                        <h4 style="color:white;">Please send <span style="color:red;">&#8358;{{ number_format($room->price) }}</span> to the bank details below. The transaction details will appear in your dashboard and will be successful only after transaction gets confirmed by our team.</h4>

                                        @forelse($banks as $bank)
                                        <span style="text-transform: capitalize;"><strong>Bank Name :</strong> {{ $bank->bank_name }}</span>
                                        <br>
                                        <span style="text-transform: capitalize;"><strong>Account Name :</strong> {{ $bank->account_name }}</span>
                                        <br>
                                        <span style="text-transform: capitalize;"><strong>Account Number :</strong> {{ $bank->account_number }}</span>
                                        @empty
                                        <p><span style="color:red;">No Account Details Found</span></p>
                                        @endforelse
                                        <br> --}}
                                        
                                        {{-- <a href="menu-of-the-day.html" class="btn_1">View Menu</a> --}}
                                    </div>
                                    {{-- <figure class="d-none d-lg-block"><img src="img/restaurant/banner.svg" alt="" width="200" height="200" class="img-fluid"></figure> --}}
                                </div>
                                <!-- /wrapper -->
                            </div>
                           
                        </div>
                        <!-- /card-body -->
                    </div>

                    {{-- <form action="">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="box_contents_in">
                                    <h5 class="mb-4">Please upload your payment prove/receipt below for further review by our team.</h5>
                                </div>
                            </div>

                            
                            <input type="hidden" name="room_type_id" value="{{ $room->id }}">
                            <input type="hidden" name="customer_name" id="" value="{{ Auth::user()->first_name.' '.Auth::user()->last_name }}">
                            <input type="hidden" name="customer_email" id="" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="customer_phone" id="" value="{{ Auth::user()->phone }}">
                            <input type="hidden" name="slug" value="{{ $room->slug }}">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input class="form-control" type="file" name="checkin" id="" placeholder="Check In">
                                </div>
                                @error('checkin')
                                    <small class="text-danger">{{ $message }}</small>  
                                @enderror
                            </div>

                            <p class="text-center mt-2"><button type="submit" class="btn_1 outline">Upload Image</buttom></p>
                                
                            {{ Session::get('checkin') }}
                        </div>
                    </form> --}}
            </div>
            <!-- /tab-content -->
      </div>
      <!-- /tabs_menu-->
      

    </div>
    <!-- /container -->
</div>
<!-- /pattern -->
@endguest


@endsection
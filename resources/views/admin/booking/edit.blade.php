@extends('layouts.admin')

@section('title', "Update Booking")

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/bookings') }}">Bookings</a></li>
      <li class="breadcrumb-item active">Update Booking</li>
    </ol>
  </nav>
<h2 class="mb-4">Update Booking</h2>
@include('layouts.alert.msg')
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/bookings/'.$booking->id) }}" method="POST" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="customer_id" name="customer_id">
                        @foreach($customers as $customer) 
                            <option value="{{ $customer->id }}" {{ $customer->id == $booking->customer_id ? 'selected':'' }}>{{ $customer->name }}</option>
                        @endforeach
                    </select>
                    <label for="customer_id">Select Customer</label>
                </div>
                @error('customer_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="room_id" name="room_id">
                        @foreach($rooms as $room) 
                            <option value="{{ $room->id }}" {{ $room->id == $booking->room_id ? 'selected':'' }}>{{ $room->room_number }}</option>
                        @endforeach
                    </select>
                    <label for="room_id">Select Room</label>
                </div>
                @error('room_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="checkin" name="checkin" type="date" value="{{ $booking->checkin }}"/>
                    <label for="checkin">Check In Date</label>
                </div>
                @error('checkin')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="checkout" name="checkout" type="date" value="{{ $booking->checkout }}"/>
                    <label for="checkout">Date</label>
                </div>
                @error('checkout')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="adults_booking" name="adults_booking" type="number" placeholder="Adults Booking" value="{{ $booking->adults_booking }}"/>
                    <label for="adults_booking">Adult(s)</label>
                </div>
                @error('adults_booking')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="childs_booking" name="childs_booking" type="number" placeholder="Childs Booking" value="{{ $booking->childs_booking }}"/>
                    <label for="childs_booking">Childs Booking</label>
                </div>
                @error('childs_booking')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>
            
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                   
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Update</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection
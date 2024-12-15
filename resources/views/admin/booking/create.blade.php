@extends('layouts.admin')

@section('title', 'Add New booking')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/bookings') }}">Bookings</a></li>
      <li class="breadcrumb-item active">New Booking</li>
    </ol>
  </nav>
<h2 class="mb-4">Add New Booking</h2>
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/bookings/create') }}" method="POST" class="row g-3 mb-6">
            @csrf

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="customer_id" name="customer_id">
                        @foreach($customers as $customer) 
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
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
                        @foreach($roomtypes as $roomtype) 
                            <option value="{{ $roomtype->id }}">{{ $roomtype->room_type }}</option>
                        @endforeach
                    </select>
                    <label for="room_id">Select Room Type</label>
                </div>
                @error('room_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="checkin" name="checkin" type="date" placeholder="Check In" value="{{ old('checkin') }}"/>
                    <label for="checkin">Check In</label>
                </div>
                @error('checkin')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            
            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="checkout" name="checkout" type="date" placeholder="checkout" value="{{ old('checkout') }}"/>
                    <label for="checkout">Check Out</label>
                </div>
                @error('checkout')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="adults_booking" name="adults_booking" type="number" placeholder="Adults Booking" value="{{ old('adults_booking') }}"/>
                    <label for="adults_booking">Adult(s)</label>
                </div>
                @error('adults_booking')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="childs_booking" name="childs_booking" type="number" placeholder="Childs Booking" value="{{ old('childs_booking') }}"/>
                    <label for="childs_booking">Childs Booking</label>
                </div>
                @error('childs_booking')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

           
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Save</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection
@extends('layouts.admin')

@section('title', 'Update Payment')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/payments') }}">Payments</a></li>
      <li class="breadcrumb-item active">Update Payment</li>
    </ol>
  </nav>
<h2 class="mb-4">Update Payment</h2>
@include('layouts.alert.msg')
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/payments/'.$payment->id) }}" method="POST" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="booking_id" name="booking_id">
                        @foreach($bookings as $booking) 
                            <option value="{{ $booking->id }}" {{ $booking->id == $payment->booking_id ? 'selected':'' }}>{{ $booking->created_at }}</option>
                        @endforeach
                    </select>
                    <label for="booking_id">Select Booking</label>
                </div>
                @error('booking_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="type" name="type" type="text" placeholder="Type" value="{{ $payment->type }}"/>
                    <label for="type">Type</label>
                </div>
                @error('type')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="amount" name="amount" type="number" placeholder="Amount" value="{{ $payment->amount }}"/>
                    <label for="amount">Amount</label>
                </div>
                @error('amount')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="payment_type" name="payment_type">
                        <option value="{{ $payment->payment_type }}">{{ $payment->payment_type }}</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Cash">Cash</option>
                        <option value="Card">Card</option>
                    </select>
                    <label for="payment_type">Payment Type</label>
                </div>
                @error('payment_type')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            
            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="payment_details" name="payment_details" placeholder="Enter Payment Details Here..." style="height: 100px">{{ $payment->payment_details }}</textarea>
                    <label for="payment_details">Payment Details</label>
                </div>
                @error('payment_details')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="payment_date" name="payment_date" type="date" placeholder="Payment Date" value="{{ $payment->payment_date }}"/>
                    <label for="payment_date">Payment Date</label>
                </div>
                @error('payment_date')
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
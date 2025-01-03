@extends('layouts.admin')

@section('title', 'Add New order')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/orders') }}">Orders</a></li>
      <li class="breadcrumb-item active">New Order</li>
    </ol>
  </nav>
<h2 class="mb-4">Add New Order</h2>
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/orders/create') }}" method="POST" class="row g-3 mb-6">
            @csrf

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="booking_id" name="booking_id">
                        @foreach($bookings as $booking) 
                            <option value="{{ $booking->id }}">{{ $booking->created_at }}</option>
                        @endforeach
                    </select>
                    <label for="booking_id">Select Booking Date</label>
                </div>
                @error('booking_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="item_id" name="item_id">
                        @foreach($items as $item) 
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="item_id">Select Item</label>
                </div>
                @error('item_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="price" name="price" type="number" placeholder="Price" value="{{ old('price') }}"/>
                    <label for="price">Price</label>
                </div>
                @error('price')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            
            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="quantity" name="quantity" type="number" placeholder="quantity" value="{{ old('quantity') }}"/>
                    <label for="quantity">Quantity</label>
                </div>
                @error('quantity')
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
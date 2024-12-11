@extends('layouts.admin')

@section('title', "Update $customer->name Record")

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/customers') }}">Customers</a></li>
      <li class="breadcrumb-item active">New customer</li>
    </ol>
  </nav>
<h2 class="mb-4">Update {{ $customer->name }} Record</h2>
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/customers/'.$customer->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Customer Name" value="{{ $customer->name }}"/>
                    <label for="name">Customer Name</label>
                </div>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="gender" name="gender">
                        <option value="{{ $customer->gender }}">{{ $customer->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                </div>
                @error('gender')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number" value="{{ $customer->phone }}" />
                    <label for="phone">Phone Number</label>
                </div>
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="room_number" type="number" name="room_number" placeholder="Room Number" value="{{ $customer->number }}" />
                    <label for="room_number">Room Number</label>
                </div>
                @error('room_number')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="address" name="address" placeholder="Enter Address Here..." style="height: 100px">{{ $customer->address }}</textarea>
                    <label for="address">Address</label>
                </div>
                @error('address')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <img src="{{ asset($customer->image) }}" width="80" height="80" alt="">
                    <br>
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" id="image" name="image" type="file"  />
                </div>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="reason" name="reason" placeholder="Reason(s)" style="height: 100px">{{ $customer->reason }}</textarea>
                    <label for="reason">Reason(s) For Visit</label>
                </div>
                @error('reason')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="amount_paid" name="amount_paid" type="number" placeholder="Amount Paid" value="{{ $customer->amount_paid }}" />
                    <label for="amount_paid">Amount Paid</label>
                </div>
                @error('amount_paid')
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
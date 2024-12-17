@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

  <div class="pb-5">
    <div class="row g-4">
      <div class="col-12 col-xxl-6">
        <div class="mb-8">
          <h2 class="mb-2">Admin Dashboard</h2>
          <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
        </div>
        <div class="row align-items-center g-4">
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/user.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $user }} Users</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/booking.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $offbooking }} Offline Bookings</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/booking.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $onbooking }} Online Bookings</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/order.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $order }} Orders</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/fac.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $facility }} Facilities</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/user.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $customer }} Customers</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/emp.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $employee }} Employees</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/pay.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $offpayment }} Offline Payments</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/exp.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $expense }} Expenses</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/rom.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $roomtype }} Room Types</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/room.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $room }} Rooms</h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><img src="{{ asset('uploads/photos/item.png') }}" alt="" height="100" width="100" />
              <div class="ms-3">
                <h4 class="mb-0">{{ $item }} Items</h4>
              </div>
            </div>
          </div>
          
          
        </div>
        {{-- <hr class="bg-200 mb-6 mt-4" /> --}}
        
        
      </div>
      
    </div>
  </div>
  

  

@endsection
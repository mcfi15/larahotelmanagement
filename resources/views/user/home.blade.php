@extends('layouts.app')

@section('title', Auth::user()->first_name.' '.Auth::user()->last_name)

@section('content')

<section class="pt-5 pb-9">
    <div class="container-small">
      
      <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Profile</h2>
        </div>
       
      </div>
      <div class="row g-3 mb-6">
        <div class="col-12 col-lg-8">
          <div class="card h-100">
            <div class="card-body">
              <div class="border-bottom border-dashed border-300 pb-4">
                <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                  <div class="col-12 col-sm-auto">
                    @if (Auth::user()->image == '')
                    <div class="avatar avatar-5xl"><img class="rounded-circle" src="{{ asset('uploads/profile/avatar.png') }}" alt="" /></div>
                    @else
                    <div class="avatar avatar-5xl"><img class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="" /></div>
                    @endif
                  </div>
                  <div class="col-12 col-sm-auto flex-1">
                    <h3 style="text-transform: capitalize;">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</h3>
                    <p class="text-800">Joined on {{ Auth::user()->created_at }}</p>
                    {{-- <div><a class="me-2" href="#!"><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="#!"><span class="fab fa-facebook text-400 hover-primary"></span></a><a href="#!"><span class="fab fa-twitter text-400 hover-primary"></span></a></div> --}}
                  </div>
                </div>
              </div>
              <div class="d-flex flex-between-center pt-4">
                <div>
                  <h6 class="mb-2 text-800">Gender</h6>
                  <h4 class="fs-1 text-1000 mb-0">{{ Auth::user()->gender }}</h4>
                </div>
                <div class="text-end">
                  <h6 class="mb-2 text-800">Date of Birth</h6>
                  <h4 class="fs-1 text-1000 mb-0">{{ Auth::user()->dob }}</h4>
                </div>
                <div class="text-end">
                  <h6 class="mb-2 text-800">Country</h6>
                  <h4 class="fs-1 text-1000 mb-0">97 </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="border-bottom border-dashed border-300">
                <h4 class="mb-3 lh-sm lh-xl-1">Default Address<button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button></h4>
              </div>
              <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                <div class="row justify-content-between">
                  <div class="col-auto">
                    <h5 class="text-1000">Address</h5>
                  </div>
                  <div class="col-auto">
                    <p class="text-800">{{ Auth::user()->address }} </p>  
                    <p class="text-800">{{ Auth::user()->zip }} </p>
                    <p class="text-800">{{ Auth::user()->state }} </p> 
                    <p class="text-800">{{ Auth::user()->country }}</p>
                  </div>
                </div>
              </div>
              <div class="border-top border-dashed border-300 pt-4">
                <div class="row flex-between-center mb-2">
                  <div class="col-auto">
                    <h5 class="text-1000 mb-0">Email</h5>
                  </div>
                  <div class="col-auto"><a class="lh-1" >{{ Auth::user()->email }}</a></div>
                </div>
                <div class="row flex-between-center">
                  <div class="col-auto">
                    <h5 class="text-1000 mb-0">Phone</h5>
                  </div>
                  <div class="col-auto"><a class="text-800" href="tel:{{ Auth::user()->phone }}">{{ Auth::user()->phone }}</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

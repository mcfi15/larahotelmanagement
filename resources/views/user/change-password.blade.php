@extends('layouts.app')

@section('title', 'Change User Password')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
      <li class="breadcrumb-item active">Change Password</li>
    </ol>
  </nav>
  <br>
  <div class="mb-9 ">
    <div class="row g-6">
        @include('layouts.alert.msgFront')
        <div class="col-12 col-xl-12">
            <form action="{{ url('change-password') }}" method="POST" >
                @csrf
            <div class="border-bottom border-300 mb-4 ">

                
                <div class="mb-6 ">
                    <h4 class="mb-4">Change Password</h4>
                    <br>
                    <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="current_password"
                                    name="current_password"
                                    value=""
                                        type="password" placeholder="Current Password" /><label class="text-700 form-icon-label"
                                        for="current_password">Current Password <span style="color:red;">*</span></label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('current_password')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                    </div>
                        <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="password"
                                    name="password"
                                    value=""
                                        type="password" placeholder="New Password" /><label class="text-700 form-icon-label"
                                        for="password">New Password <span style="color:red;">*</span></label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        </div>
                        <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="password_confirmation"
                                    name="password_confirmation"
                                    value=""
                                        type="password" placeholder="Confirm Password" /><label class="text-700 form-icon-label"
                                        for="password_confirmation">Confirm Password <span style="color:red;">*</span></label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>

                        
                    </div>
                </div>
                
                <div class="text-start mb-6">
                    <div>
                        <button type="submit" class="btn btn-phoenix-primary">Update Password</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

@endsection
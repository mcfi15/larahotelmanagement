@extends('layouts.app')

@section('title', 'User Settings')

@section('content')

<div class="mb-9">
    <div class="row g-6">
        @include('layouts.alert.msgFront')
        <div class="col-12 col-xl-12">
            <form action="{{ url('settings/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="border-bottom border-300 mb-4">

                
                <div class="mb-6">
                    <h4 class="mb-4">User Information</h4>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="first_name"
                                    name="first_name"
                                    value="{{ Auth::user()->first_name }}"
                                        type="text" placeholder="Website Name" /><label class="text-700 form-icon-label"
                                        for="first_name">First NAME</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('first_name')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="last_name"
                                    name="last_name"
                                    value="{{ Auth::user()->last_name }}"
                                        type="text" placeholder="Last Name" /><label class="text-700 form-icon-label"
                                        for="last_name">Last Name</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('last_name')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="phone"
                                    name="phone"
                                    value="{{ Auth::user()->phone }}"
                                        type="text" placeholder="Phone" /><label class="text-700 form-icon-label"
                                        for="phone">Phone</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="dob"
                                    name="dob"
                                    value="{{ Auth::user()->dob }}"
                                        type="date" placeholder="Date of Birth" /><label class="text-700 form-icon-label"
                                        for="dob">Date of Birth</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('dob')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                            <div class="form-floating">
                                <select class="form-select" id="gender" name="gender">
                                    <option value="{{ Auth::user()->gender }}">{{ Auth::user()->gender }}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="gender">gender</label>
                            </div>
                            @error('gender')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="address"
                                    name="address"
                                    value="{{ Auth::user()->address }}"
                                        type="text" placeholder="Address" /><label class="text-700 form-icon-label"
                                        for="address">address</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="zip"
                                    name="zip"
                                    value="{{ Auth::user()->zip }}"
                                        type="text" placeholder="Zipcode" /><label class="text-700 form-icon-label"
                                        for="zip">Zipcode</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('zip')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating">
                                    <select class="form-select" id="country" name="country">
                                        
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->name }}" {{$item->name == Auth::user()->country ? 'selected':'' }}>{{ $item->name }}</option> 
                                        @endforeach
                                    </select>
                                    <label for="country">Select Country</label>
                                </div>
                            </div>
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="mb-4">Image Information</h4>
                    <div class="row g-3">
                        
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="image">Profile Image</label>
                                    <br>
                                    <span style=""><small><em>Specify the profile image should have a transparent background (300 x 82) recommended.</em></small></span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        @if (Auth::user()->image == '')
                                        <img src="{{ asset('uploads/profile/avatar.png') }}" alt="Profile" style="width: 180px;height: 100px; border-radius:10px;">
                                        @else
                                        <img src="{{ asset(Auth::user()->image) }}" alt="image" style="width: 180px;height: 100px; border-radius:20px;">
                                        @endif
                                        <br>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>  
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
                
                <div class="text-end mb-6">
                    <div>
                        <button type="submit" class="btn btn-phoenix-primary">Save Information</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

@endsection
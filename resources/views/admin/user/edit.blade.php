@extends('layouts.admin')

@section('title', 'Update'.' '.$user->first_name.' '.'account')

@section('content')

@if(Auth::user()->role_as == 2)
<script>window.location = "/admin/dashboard";</script>
@endif

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/users') }}">Users</a></li>
      <li class="breadcrumb-item active">Update User</li>
    </ol>
  </nav>
  <br>
  <div class="mb-9">
    <div class="row g-6">
        @include('layouts.alert.msg')
        <div class="col-12 col-xl-12">
            <form action="{{ url('admin/users/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="border-bottom border-300 mb-4">

                
                <div class="mb-6">
                    <h4 class="mb-4">Update User</h4>
                    <br>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="first_name"
                                    name="first_name"
                                    value="{{ $user->first_name }}"
                                        type="text" placeholder="First Name" /><label class="text-700 form-icon-label"
                                        for="first_name">FIRST NAME <span style="color:red;">*</span></label></div><span
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
                                    value="{{ $user->last_name }}"
                                        type="text" placeholder="Last Name" /><label class="text-700 form-icon-label"
                                        for="last_name">LAST NAME <span style="color:red;">*</span></label></div><span
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
                                    value="{{ $user->phone }}"
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
                                    value="{{ $user->dob }}"
                                        type="date" placeholder="Date of Birth" /><label class="text-700 form-icon-label"
                                        for="dob">DATE OF BIRTH</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('dob')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>

                        

                        <div class="col-12 col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="role_as" name="role_as">
                                    @if ($user->role_as == '1')
                                    <option value="1">Super Admin</option>
                                    @elseif ($user->role_as == '2')
                                    <option value="2">Sub Admin</option>
                                    @elseif ($user->role_as == '0')
                                    <option value="0">User</option>
                                    @endif
                                    <option value="1">Super Admin</option>
                                    <option value="2">Sub Admin</option>
                                    <option value="0">User</option>
                                </select>
                                <label for="role_as">ROLE <span style="color:red;">*</span></label>
                            </div>
                            @error('role_as')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="gender" name="gender">
                                    <option value="{{ $user->gender }}">{{$user->gender}}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="gender">GENDER <span style="color:red;">*</span></label>
                            </div>
                            @error('gender')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                          </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating">
                                    <select class="form-select" id="country" name="country">
                                        
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->name }}" {{ $item->name == $user->country ? 'selected':'' }}>{{ $item->name }}</option> 
                                        @endforeach
                                    </select>
                                    <label for="country">Select Country</label>
                                </div>
                            </div>
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="state"
                                    name="state"
                                    value="{{ $user->state }}"
                                        type="text" placeholder="State" /><label class="text-700 form-icon-label"
                                        for="state">STATE</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('state')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="zip"
                                    name="zip"
                                    value="{{ $user->zip }}"
                                        type="text" placeholder="Zipcode" /><label class="text-700 form-icon-label"
                                        for="zip">Zipcode</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('zip')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-icon-container">
                                <div class="form-floating"><textarea class="form-control form-icon-input" id="address"
                                    name="address"
                                        style="height: 115px;" placeholder="address">{{ $user->address }}</textarea><label
                                        class="text-700 form-icon-label" for="address">Address</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-12">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                @if ($user->image == '')
                                <span class="text-danger">No image found</span>
                                @else
                                <img src="{{ asset($user->image) }}" alt="profile" width="80" height="80">
                                @endif
                                <br>
                                <label class="form-label" for="image">Profile Image</label>
                                <input class="form-control" id="image" name="image" type="file"  />
                            </div>
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        
                    </div>
                </div>
                
                <div class="text-end mb-6">
                    <div>
                        <button class="btn btn-phoenix-primary">Save Information</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

@endsection
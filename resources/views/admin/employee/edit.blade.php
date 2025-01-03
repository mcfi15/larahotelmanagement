@extends('layouts.admin')

@section('title', "Update $employee->name Record")

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/employees') }}">Employees</a></li>
      <li class="breadcrumb-item active">Update employee</li>
    </ol>
  </nav>
<h2 class="mb-4">Update {{ $employee->name }} Record</h2>
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/employees/'.$employee->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Employee Name" value="{{ $employee->name }}"/>
                    <label for="name">Employee Name</label>
                </div>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select class="form-select" id="gender" name="gender">
                        <option value="{{ $employee->gender }}">{{ $employee->gender }}</option>
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
                    <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number" value="{{ $employee->phone }}" />
                    <label for="phone">Phone Number</label>
                </div>
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <input class="form-control" id="position" type="text" name="position" placeholder="Position" value="{{ $employee->position }}" />
                    <label for="position">Position</label>
                </div>
                @error('position')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="address" name="address" placeholder="Enter Address Here..." style="height: 100px">{{ $employee->address }}</textarea>
                    <label for="address">Address</label>
                </div>
                @error('address')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <img src="{{ asset($employee->passport) }}" width="80" height="80" alt="">
                    <br>
                    <label class="form-label" for="passport">Passport</label>
                    <input class="form-control" id="passport" name="passport" type="file"  />
                </div>
                @error('passport')
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
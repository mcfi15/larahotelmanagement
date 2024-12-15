@extends('layouts.admin')

@section('title', 'Add New Facility')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/items') }}">Faciliies</a></li>
      <li class="breadcrumb-item active">New Facility</li>
    </ol>
  </nav>
<h2 class="mb-4">Add New Facilities</h2>

    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/facilities/create') }}" method="POST" class="row g-3 mb-6" enctype="multipart/form-data">
            @csrf

            

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{ old('name') }}"/>
                    <label for="name">Name</label>
                </div>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" id="image" name="image" type="file"  />
                </div>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="details" name="details" placeholder="Enter Details Here..." style="height: 100px">{{ old('details') }}</textarea>
                    <label for="details">Details</label>
                </div>
                @error('details')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="status" name="status">
                        <option value="">-- Select Status --</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    <label for="status">Status</label>
                </div>
                @error('status')
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
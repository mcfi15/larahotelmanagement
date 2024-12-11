@extends('layouts.admin')

@section('title', 'Add New Room Type')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/room-types') }}">Room Types</a></li>
      <li class="breadcrumb-item active">New Room Type</li>
    </ol>
  </nav>
  <br>
<h2 class="mb-4">Add New Room Type</h2>
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/room-types/create') }}" method="POST" enctype="multipart/form-data" class="row g-3 mb-6">
            @csrf

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="room_type" name="room_type" type="text" placeholder="Room Type" value="{{ old('room_type') }}"/>
                    <label for="room_type">Room Type</label>
                </div>
                @error('room_type')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label" for="image">Featured Image</label>
                    <input class="form-control" id="image" name="image" type="file"  />
                </div>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description Here..." style="height: 100px">{{ old('description') }}</textarea>
                    <label for="description">Description</label>
                </div>
                @error('description')
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

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label" for="room_images">Other Images <span style="color:red;">(Uploads multiple images)</span></label>
                    <input class="form-control" id="room_images" name="room_images[]" type="file" multiple />
                </div>
                @error('room_images')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            

            <div class="form-check">
                <input class="form-check-input" id="tv" name="tv" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="tv">TV</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="bed" name="bed" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="bed">King Size Bed</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="balcony" name="balcony" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="balcony">Balcony</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="pet" name="pet" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="pet">Pet</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="box" name="box" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="box">Safety Box</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="wifi" name="wifi" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="wifi">Wifi</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="netflix" name="netflix" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="netflix">Netflix</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="air_condition" name="air_condition" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="air_condition">Air Condition</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="loundry" name="loundry" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="loundry">Loundry</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="status" name="status" type="checkbox" />
                <label class="form-check-label fw-bold fs-0 mb-6" for="status">Status</label>
                (Unchecked = Inactive, Checked = Active)
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
@extends('layouts.admin')

@section('title', 'Update Room')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/rooms') }}">Rooms</a></li>
      <li class="breadcrumb-item active">Update Room</li>
    </ol>
  </nav>
<h2 class="mb-4">Update Room</h2>
@include('layouts.alert.msg')
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/rooms/'.$room->id) }}" method="POST" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="room_type_id" name="room_type_id">
                        @foreach($roomTs as $roomT) 
                            <option value="{{ $roomT->id }}" {{ $roomT->id == $room->room_type_id ? 'selected':'' }}>{{ $roomT->room_type }}</option>
                        @endforeach
                    </select>
                    <label for="room_type_id">Select Room Type</label>
                </div>
                @error('room_type_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="room_number" name="room_number" type="text" placeholder="Room Number" value="{{ $room->room_number }}"/>
                    <label for="room_number">Room Number</label>
                </div>
                @error('room_number')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description Here..." style="height: 100px">{{ $room->description }}</textarea>
                    <label for="description">Description</label>
                </div>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="status" name="status">
                        <option value="{{ $room->status }}">{{ $room->status }}</option>
                        <option value="Vacant">Vacant</option>
                        <option value="Booked">Booked</option>
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
                   
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Update</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection
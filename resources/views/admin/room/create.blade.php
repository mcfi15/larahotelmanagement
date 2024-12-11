@extends('layouts.admin')

@section('title', 'Add New Room')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/rooms') }}">Rooms</a></li>
      <li class="breadcrumb-item active">New Room</li>
    </ol>
  </nav>
<h2 class="mb-4">Add New Room</h2>

    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/rooms/create') }}" method="POST" class="row g-3 mb-6">
            @csrf

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="room_type_id" name="room_type_id">
                        @foreach($room_types as $roomitem) 
                            <option value="{{ $roomitem->id }}">{{ $roomitem->room_type }}</option>
                        @endforeach
                    </select>
                    <label for="room_type_id">Select Room type</label>
                </div>
                @error('room_type_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="room_number" name="room_number" type="number" placeholder="Room Number" value="{{ old('room_number') }}"/>
                    <label for="room_number">Room Number</label>
                </div>
                @error('room_number')
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
                    <select class="form-select" id="status" name="status">
                        <option value="">-- Select Status --</option>
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
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Save</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection
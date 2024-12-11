@extends('layouts.admin')

@section('title', "Update Room Type")

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/room-types') }}">Room Types</a></li>
      <li class="breadcrumb-item active">Update Room Type</li>
    </ol>
  </nav>
<h2 class="mb-4">Update Room Type</h2>
@include('layouts.alert.msg')
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/room-types/'.$room->id) }}" method="POST" enctype="multipart/form-data" class="row g-3 mb-6">
            @csrf
            @method('PUT')


            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="room_type" name="room_type" type="text" placeholder="Room Type" value="{{ $room->room_type }}"/>
                    <label for="room_type">Room Type</label>
                </div>
                @error('room_type')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <img src="{{ asset($room->image) }}" width="80" height="80" alt="">
                    <br>
                    <label class="form-label" for="image">Featured Image</label>
                    <input class="form-control" id="image" name="image" type="file"  />
                </div>
                @error('image')
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
                    <input class="form-control" id="price" name="price" type="number" placeholder="Price" value="{{ $room->price }}"/>
                    <label for="price">Price</label>
                </div>
                @error('price')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label" for="room_images">Other Images <span class="text-red">(Uploads multiple images)</span></label>
                    <input class="form-control" id="room_images" name="room_images[]" type="file" multiple />
                    <br>
                    @if ($room->images)
                        <div class="row">
                            @forelse ($room->images as $image)
                            <div class="col-md-2">
                                <a href="{{ url('admin/room-image/'.$image->id.'/delete') }}" class="d-black"><i class="fa fa-trash"></i></a>
                                <img src="{{ asset("$image->room_images") }}" alt="Images" style="width:80px; height:80px;" class="me-4 border">
                                
                            </div>
                            @empty   
                            <span style="color: red;">No Image Added</span>
                            @endforelse
                        </div>
                    @endif
                </div>
                @error('room_images')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" id="tv" name="tv" type="checkbox" {{ $room->tv == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="tv">TV</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="bed" name="bed" type="checkbox" {{ $room->bed == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="bed">King Size Bed</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="balcony" name="balcony" type="checkbox" {{ $room->balcony == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="balcony">Balcony</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="pet" name="pet" type="checkbox" {{ $room->pet == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="pet">Pet</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="box" name="box" type="checkbox" {{ $room->box == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="box">Safety Box</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="wifi" name="wifi" type="checkbox" {{ $room->wifi == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="wifi">Wifi</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="netflix" name="netflix" type="checkbox" {{ $room->netflix == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="netflix">Netflix</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="air_condition" name="air_condition" type="checkbox" {{ $room->air_condition == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="air_condition">Air Condition</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="loundry" name="loundry" type="checkbox" {{ $room->loundry == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="loundry">Loundry</label>
                (Unchecked = Unavailable, Checked = Available)
            </div>

            <div class="form-check">
                <input class="form-check-input" id="status" name="status" type="checkbox" {{ $room->status == '1' ? 'checked' : ''}} />
                <label class="form-check-label fw-bold fs-0 mb-6" for="status">Status</label>
                (Unchecked = Inactive, Checked = Active)
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
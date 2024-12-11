@extends('layouts.admin')

@section('title', 'Add New Bank')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/items') }}">Banks</a></li>
      <li class="breadcrumb-item active">New Bank</li>
    </ol>
  </nav>
<h2 class="mb-4">Add New Bank</h2>

    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/banks/create') }}" method="POST" class="row g-3 mb-6">
            @csrf

            

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="bank_name" name="bank_name" type="text" placeholder="Bank Name" value="{{ old('bank_name') }}"/>
                    <label for="bank_name">Bank Name</label>
                </div>
                @error('bank_name')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="account_name" name="account_name" type="text" placeholder="Account Name" value="{{ old('account_name') }}"/>
                    <label for="account_name">Account Name</label>
                </div>
                @error('account_name')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="account_number" name="account_number" type="text" placeholder="Account Number" value="{{ old('account_number') }}"/>
                    <label for="account_number">Account Number</label>
                </div>
                @error('account_number')
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
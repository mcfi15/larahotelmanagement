@extends('layouts.admin')

@section('title', 'Online Payment Options')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active">Payment Options</li>
    </ol>
</nav>
<br>
<h2 class="mb-4">Change Online Payment Method</h2>
@include('layouts.alert.msg')
<br>
<div class="row">
    <div class="col-xl-9">
        <form action="{{ url('admin/payment-options') }}" method="POST" class="row g-3 mb-6">
            @csrf
                

            <p><span class="text-success"><i class="far fa-check-circle"></i> {{ $payment->payment ?? '' }}</span></p>

            <br><br>

            <select class="form-select form-select-lg mb-3" name="payment" aria-label=".form-select-lg example">
                <option value="">-- Select Payment Method --</option>
                <option value="Bank Payment Method">Bank Method</option>
                <option value="Gateway Payment Method">Gateway Method</option>
            </select>
            @error('payment')
                <small class="text-danger">{{ $message }}</small>  
            @enderror
            
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Change Status</button></div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
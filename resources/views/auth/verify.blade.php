@extends('layouts.back')

@section('content')

<div class="mb-6 justify-content-center">
    <h4 class="text-1000">Verify Your Email Address!</h4>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <p class="text-700">Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
  </div>
  <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
    @csrf
  <div class="d-grid"><button class="btn btn-primary" type="submit"><span class="fas fa-angle-left me-2"></span>click here to request another</button></div>
  </form>


@endsection

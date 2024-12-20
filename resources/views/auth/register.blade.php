@extends('layouts.back')

@section('title', 'Registration Page')

@section('content')

<div class="text-center mb-7">
    <h3 class="text-1000">Sign Up</h3>
    <p class="text-700">Create your account today</p>
 
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="mb-3 text-start"><label class="form-label" for="first_name">First Name</label><input class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" id="first_name" type="text" placeholder="First Name" />
    @error('first_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3 text-start"><label class="form-label" for="last_name">Last Name</label><input class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" id="last_name" type="text" placeholder="Last Name" />
    @error('last_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label><input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" placeholder="name@example.com" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="row g-3 mb-3">
      <div class="col-md-6">
        <label class="form-label" for="password">Password</label>
        <input class="form-control form-icon-input @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" />
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="col-md-6"><label class="form-label" for="confirm_password">Confirm Password</label><input class="form-control form-icon-input" name="password_confirmation" type="password" placeholder="Confirm Password" /></div>
    </div>

    {{-- <div class="mb-3">
        {!! htmlFormSnippet() !!}
        @if ($errors->has('g-recaptcha-response'))

            <div>
                <span class="text-danger">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            </div>
        @endif
    </div> --}}

    {{-- <div class="form-check mb-3"><input class="form-check-input" id="termsService" type="checkbox" /><label class="form-label fs--1 text-none" for="termsService">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div> --}}
    <button class="btn btn-primary w-100 mb-3">Register</button>
    <div class="text-center"><a class="fs--1 fw-bold" href="{{ url('login') }}">Sign in to an existing account</a></div>
  </form>


@endsection

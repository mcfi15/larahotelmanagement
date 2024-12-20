@extends('layouts.back')

@section('title', 'Login Page')

@section('content')

<div class="text-center mb-7">
    <h3 class="text-1000">Sign In</h3>
    <p class="text-700">Get access to your account</p>
  </div>

  <form method="POST" action="{{ route('login') }}">
    @csrf
  
  <div class="mb-3 text-start">
    <label class="form-label" for="email">Email address</label>
    <div class="form-icon-container">
        <input class="form-control form-icon-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" type="email" placeholder="name@example.com" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  </div>
  <div class="mb-3 text-start">
    <label class="form-label" for="password">Password</label>
    <div class="form-icon-container">
        <input class="form-control form-icon-input @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  </div>
  <div class="row flex-between-center mb-7">
    <div class="col-auto">
      <div class="form-check mb-0"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
    </div>
    <div class="col-auto">
        @if (Route::has('password.request'))
        <a class="fs--1 fw-semi-bold" href="{{ route('password.request') }}">Forgot Password?</a>
        @endif
    </div>
  </div><button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
  @if (Route::has('register'))
  <div class="text-center"><a class="fs--1 fw-bold" href="{{ route('register') }}">Create an account</a></div>
  @endif

  </form>



@endsection

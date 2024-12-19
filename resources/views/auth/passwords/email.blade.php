@extends('layouts.back')

@section('title', 'Forgot Password Page')

@section('content')

<div class="px-xxl-7">
    <div class="text-center mb-6">
        <h4 class="text-1000">Forgot your password?</h4>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <p class="text-700 mb-5">Enter your email below and we will send you a reset link</p>
        <form class="d-flex align-items-center mb-5" method="POST" action="{{ route('password.email') }}">
            @csrf
            <input class="form-control flex-1 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit" class="btn btn-primary ms-2">Send Password Reset Link<span class="fas fa-chevron-right ms-2"></span></button>
        </form>
        <a class="fs--1 fw-bold" href="{{ url('contact') }}">Still having problems?</a>
    </div>
</div>


@endsection
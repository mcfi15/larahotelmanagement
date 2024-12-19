@extends('layouts.back')

@section('title', 'Confirm Password Page') 

@section('content')

<div class="text-center mb-6">
    <h4 class="text-1000">Confirm Password</h4>
    <p class="text-700">Please confirm your password before continuing.</p>
    <form class="mt-5" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <input id="password" type="password" class="form-control flex-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <button type="submit" class="btn btn-primary ms-2">Confirm Password<span class="fas fa-chevron-right ms-2"></span></button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
</div>

@endsection

@extends('layouts.back')

@section('title', 'Reset Password Page')

@section('content')

<div class="text-center mb-6">
    <h4 class="text-1000">Reset new password</h4>
    <p class="text-700">Type your new password</p>
    <form class="mt-5" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" placeholder="Type new password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        
        <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" placeholder="Cofirm new password" required autocomplete="new-password">
        
        
        <button class="btn btn-primary w-100" type="submit">Reset Password</button>
    </form>
</div>

@endsection
